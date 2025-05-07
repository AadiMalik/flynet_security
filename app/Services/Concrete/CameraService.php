<?php

namespace App\Services\Concrete;

use App\Repository\Repository;
use App\Models\Camera;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class CameraService
{
      // initialize protected model variables
      protected $model_camera;

      public function __construct()
      {
            // set the model
            $this->model_camera = new Repository(new Camera);
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
                  $camera->fill($obj);
                  $obj['stream_url'] = $this->getCameraStreamUrl($camera);
                  $obj['updatedby_id'] = $user->id;
                  $this->model_camera->update($obj, $obj['id']);
                  $saved_obj = $this->model_camera->find($obj['id']);

                  $time = now()->format('h:i A');
                  $message = "$time • {$user->name} update camera detail {$camera->id} - {$camera->name} in the Admin Panel.";
                  newActivity($message);
            } else {
                  $tempCamera = new Camera($obj);
                  $obj['stream_url'] = $this->getCameraStreamUrl($tempCamera);
                  $obj['createdby_id'] = $user->id;
                  $saved_obj = $this->model_camera->create($obj);

                  $time = now()->format('h:i A');
                  $message = "$time • {$user->name} create new camera {$saved_obj->id} - {$saved_obj->name} in the Admin Panel.";
                  newActivity($message);
            }

            if (!$saved_obj)
                  return false;

            return $saved_obj;
      }

      public function getById($id)
      {
            return $this->model_camera->getModel()::findOrFail($id);
      }

      // my cameras
      public function myCameras()
      {
            return $this->model_camera->getModel()::where('is_active', 1)
            ->select('id', 'name', 'latitude as lat', 'longitude as lng')
            ->where('createdby_id',Auth()->user()->id)
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
