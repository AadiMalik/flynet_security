<?php

namespace App\Services\Concrete;

use App\Repository\Repository;
use App\Models\{Camera, cameraRecording};
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\File;

class CameraService
{
      // initialize protected model variables
      protected $model_camera;
      protected $model_camera_recording;

      public function __construct()
      {
            // set the model
            $this->model_camera = new Repository(new Camera);
            $this->model_camera_recording = new Repository(new cameraRecording);
      }

      public function getCameraSource($data)
      {
            $model = $this->model_camera->getModel()::query();
            if (isset($data['status']) && $data['status'] !== null) {
                  $model->where('status', $data['status']);
            }
            $data = DataTables::of($model)
                  ->addColumn('active', function ($item) {
                        $checked = $item->is_active ? 'checked' : '';
                        return "<label class='switch'>
                                <input type='checkbox' class='toggle-status' data-id='{$item->id}' {$checked}>
                                <span class='slider round'></span>
                            </label>";
                  })
                  ->addColumn('action', function ($item) {
                        $action_column = '';
                        $edit_column    = "<a class='btn btn-warning btn-sm mr-2' href='cameras/edit/" . $item->id . "'><i title='Add' class='nav-icon mr-2 fa fa-edit'></i>Edit</a>";
                        $view_column    = "<a class='btn btn-info btn-sm mr-2' href='cameras/view/" . $item->id . "'><i title='Add' class='nav-icon mr-2 fa fa-eye'></i>View</a>";
                        $delete_column = "<button class='btn btn-danger btn-sm delete-camera' data-id='{$item->id}'><i class='fa fa-trash'></i> Delete</button>";
                        // if(Auth::user()->can('cameras_edit'))
                        $action_column .= $edit_column;

                        // if(Auth::user()->can('cameras_view'))
                        $action_column .= $view_column;

                        // if(Auth::user()->can('cameras_delete'))
                        $action_column .= $delete_column;


                        return $action_column;
                  })
                  ->rawColumns(['active', 'action'])
                  ->make(true);
            return $data;
      }

      public function getStatusCounts()
      {
            $cameras = $this->model_camera->getModel()::get();
            $enabled = $cameras->where('status', 'enabled')->count();
            $disabled = $cameras->where('status', 'disabled')->count();
            $online = $cameras->where('status', 'online')->count();
            $offline = $cameras->where('status', 'offline')->count();
            $unstable = $cameras->where('status', 'unstable')->count();

            return [
                  'enabled' => $enabled,
                  'disabled' => $disabled,
                  'online' => $online,
                  'offline' => $offline,
                  'unstable' => $unstable,
            ];
      }

      public function allActiveCamera()
      {
            return $this->model_camera->getModel()::where('is_active', 1)->get();
      }

      public function save($obj)
      {
            $user = Auth::user();
            if ($obj['id'] != null && $obj['id'] != '') {
                  $camera = $this->model_camera->getModel()::findOrFail($obj['id']);
                  $slug = 'cam_' . $obj['id'];
                  $obj['slug'] = $slug;
                  $obj['updatedby_id'] = $user->id;
                  $this->model_camera->update($obj, $obj['id']);
                  $saved_obj = $this->model_camera->find($obj['id']);
                  $this->regenerateMediatmxConfig($saved_obj);

                  $time = now()->format('h:i A');
                  $message = "$time • {$user->name} update camera detail {$camera->id} - {$camera->name} in the Admin Panel.";
                  newActivity($message);
            } else {
                  $slug = 'cam_' . (Camera::count() + 1);
                  $obj['slug'] = $slug;
                  $obj['createdby_id'] = $user->id;
                  $saved_obj = $this->model_camera->create($obj);
                  $this->regenerateMediatmxConfig($saved_obj);

                  $time = now()->format('h:i A');
                  $message = "$time • {$user->name} create new camera {$saved_obj->id} - {$saved_obj->name} in the Admin Panel.";
                  newActivity($message);
            }

            if (!$saved_obj)
                  return false;

            return $saved_obj;
      }


      protected function regenerateMediatmxConfig($camera)
      {
            $configPath = storage_path('app/mediamtx.yml');

            // Check if the file exists
            if (File::exists($configPath)) {
                  // Read the file contents
                  $configData = File::get($configPath);

                  // Check if the camera already exists in the file
                  $cameraSlugPattern = "/^\s*{$camera->slug}:\s*$/m";  // Regex to check for the camera slug

                  if (preg_match($cameraSlugPattern, $configData)) {
                        // Camera exists, so update the existing camera's stream_url
                        $configData = preg_replace(
                              "/(\s*{$camera->slug}:\s*[\s\S]*?source:)(.*?)(\n)/",
                              "$1 {$camera->stream_url} $3",
                              $configData
                        );
                  } else {
                        // Camera doesn't exist, so append a new camera entry
                        $configData .= "  {$camera->slug}:\n";
                        $configData .= "    source: {$camera->stream_url}\n";
                  }
            } else {
                  // If the file doesn't exist, create the initial structure with the new camera
                  $configData = "paths:\n";
                  $configData .= "  {$camera->slug}:\n";
                  $configData .= "    source: {$camera->stream_url}\n";
            }

            // Write the updated config data back to the file
            File::put($configPath, $configData);

            // Optionally, restart MediaMTX service if required
            $this->restartMediaMTX();
      }

      // Optional method to restart MediaMTX service
      protected function restartMediaMTX()
      {
            // Execute a command to restart MediaMTX service if applicable
            exec('sudo systemctl restart mediamtx');
      }

      public function getById($id)
      {
            return $this->model_camera->getModel()::with('recordings')->findOrFail($id);
      }

      //Camera Recording
      public function cameraRecording($camera_id, $duration = 60)
      {
            $camera = $this->model_camera->getModel()::find($camera_id);
            $startTime = now();
            $fileName = "camera_{$camera->id}_" . $startTime->format('Ymd_His') . ".mp4";
            $outputPath = public_path("recordings/{$fileName}");
            $duration = $duration ?? 60; // seconds
            $endTime = $startTime->copy()->addSeconds($duration);

            // Ensure directory exists
            if (!file_exists(public_path('recordings'))) {
                  mkdir(public_path('recordings'), 0775, true);
            }
            $process = new Process([
                  'ffmpeg',
                  '-i',
                  $camera->stream_url,
                  '-t',
                  $duration,
                  '-c',
                  'copy',
                  $outputPath
            ]);

            $process->run(); // Waits until FFmpeg finishes

            if (!$process->isSuccessful()) {
                  return $process->getErrorOutput();
            } else {

                  // Save to DB only if file was created successfully
                  $camera_recording = $this->model_camera_recording->getModel()::create([
                        'camera_id' => $camera->id,
                        'file_path' => "recordings/{$fileName}",
                        'start_time' => $startTime,
                        'end_time' => $endTime,
                        'recording_type' => 'manual',
                  ]);

                  return $camera_recording;
            }
      }

      // my cameras
      public function myCameras()
      {
            return $this->model_camera->getModel()::where('is_active', 1)
                  ->select('id', 'name', 'latitude as lat', 'longitude as lng')
                  ->where('createdby_id', Auth()->user()->id)
                  ->get();
      }

      public function deleteById($id)
      {
            $camera = $this->model_camera->getModel()::findOrFail($id);
            $obj = [
                  'deletedby_id' => Auth::user()->id
            ];
            $this->model_camera->update($obj, $id);
            $camera->delete();
            return true;
      }

      //status
      public function updateStatusById($id)
      {
            $camera = $this->model_camera->getModel()::findOrFail($id);
            $is_active = 1;
            if ($camera->is_active == 1) {
                  $is_active = 0;
            }
            $camera->is_active = $is_active;
            $camera->updatedby_id = Auth::user()->id;
            $camera->update();

            return true;
      }

      //help
      public function getCameraStreamUrl(Camera $camera)
      {
            switch ($camera->protocol) {
                  case 'RTSP':
                        return $this->generateRtspUrl($camera);
                  case 'P2P':
                        return $this->generateP2PUrl($camera);
                  case 'RTMP':
                        return $this->generateRtmpUrl($camera);
                  case 'RTSP Generic':
                        return $this->generateRtspGenericUrl($camera);
                  default:
                        return null;
            }
      }

      private function generateRtspUrl(Camera $camera)
      {
            return "rtsp://{$camera->username}:{$camera->password}@{$camera->ip_address}:{$camera->port}";
      }

      private function generateP2PUrl(Camera $camera)
      {
            // Assuming P2P uses a specific URL format
            return "http://p2p-{$camera->ip_address}/live";
      }

      private function generateRtmpUrl(Camera $camera)
      {
            // Assuming RTMP URL format
            return "rtmp://{$camera->ip_address}/live/camera_{$camera->id}";
      }

      private function generateRtspGenericUrl(Camera $camera)
      {
            return "rtsp://{$camera->ip_address}:{$camera->port}/generic";
      }
}
