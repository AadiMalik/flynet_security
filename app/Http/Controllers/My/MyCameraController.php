<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Services\Concrete\CameraService;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;

class MyCameraController extends Controller
{
    use JsonResponse;
    protected $camera_service;
    public function __construct(
        CameraService  $camera_service
    ) {
        $this->camera_service = $camera_service;
    }

    public function index(Request $request)
    {
        // abort_if(Gate::denies('my_cameras_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $search = $request->input('search');

        $cameras = $this->camera_service->myCameras();

        if ($search) {
            $cameras = $cameras->filter(function ($camera) use ($search) {
                return stripos($camera->name, $search) !== false;
            });
        }

        return view('my.my_cameras', compact('cameras'));
    }

    public function view(Request $request, $id)
    {
        // abort_if(Gate::denies('my_cameras_view'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $search = $request->input('search');

        $cameras = $this->camera_service->myCameras();

        if ($search) {
            $cameras = $cameras->filter(function ($camera) use ($search) {
                return stripos($camera->name, $search) !== false;
            });
        }
        $camera = $this->camera_service->getById($id);

        return view('my.my_camera_view', compact('camera', 'cameras'));
    }
}
