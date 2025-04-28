<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'auth/login');
Route::view('dashboard', 'home');
// My
Route::view('my-cameras', 'my/my_cameras');
Route::view('my-camera-view', 'my/my_camera_view');

Route::view('my-patrols', 'my/my_patrols');
Route::view('my-patrol-view', 'my/my_patrol_view');

Route::view('my-mosaics', 'my/my_mosaics');
Route::view('my-mosaic-view', 'my/my_mosaic_view');

Route::view('my-alarms', 'my/my_alarms');

Route::view('my-videos', 'my/my_videos');
Route::view('my-video-view', 'my/my_video_view');


Route::view('list-camera', 'camera/index');
Route::view('camera/create', 'camera/create');
Route::view('camera/view', 'camera/view');
Route::view('camera/map', 'camera/map');

Route::view('list-alarm', 'alarm/index');
Route::view('alarm/create', 'alarm/create');
Route::view('alarm/view', 'alarm/view');

Route::view('list-group', 'group/index');
Route::view('group/create', 'group/create');

// Route::view('list-user', 'users/index');
// Route::view('user/create', 'users/create');
// Route::view('user/view', 'users/view');

// Route::view('list-role','roles/index');
// Route::view('role/create','roles/create');
// Route::view('role/view','roles/view');

// Route::view('list-permission','permissions/index');
// Route::view('permission/create','permissions/create');

Route::view('list-mosaic', 'mosaics/index');
Route::view('mosaic/create', 'mosaics/create');

Route::view('list-patrol', 'patrols/index');
Route::view('patrol/create', 'patrols/create');

Route::view('list-reports', 'reports/index');

Route::view('list-customer', 'customers/index');
Route::view('customer/create', 'customers/create');

Route::view('access', 'access/index');

Route::view('list-server', 'server/index');

Route::view('activity-log', 'activity_log/index');

Route::view('list-notification', 'notifications/index');
Route::view('notification/create', 'notifications/create');

Route::view('consumption-calculator', 'consumption/index');

Route::view('address-list', 'address_list/index');

Route::view('dashboard', 'home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'permissions'], function () {
      Route::get('/', [PermissionController::class, 'index']);
      Route::post('data', [PermissionController::class, 'getData'])->name('permission.data');
      Route::get('create', [PermissionController::class, 'create']);
      Route::post('store', [PermissionController::class, 'store']);
      Route::get('edit/{id}', [PermissionController::class, 'edit']);
      Route::post('update', [PermissionController::class, 'update']);
});

Route::group(['prefix' => 'roles'], function () {
      Route::get('/', [RoleController::class, 'index']);
      Route::post('data', [RoleController::class, 'getData'])->name('role.data');
      Route::get('create', [RoleController::class, 'create']);
      Route::post('store', [RoleController::class, 'store']);
      Route::get('edit/{id}', [RoleController::class, 'edit']);
      Route::post('update', [RoleController::class, 'update']);
});

Route::group(['prefix' => 'users'], function () {
      Route::get('/', [UserController::class, 'index']);
      Route::post('data', [UserController::class, 'getData'])->name('user.data');
      Route::get('create', [UserController::class, 'create']);
      Route::post('store', [UserController::class, 'store']);
      Route::get('edit/{id}', [UserController::class, 'edit']);
      Route::post('update', [UserController::class, 'update']);
      // Route::get('destroy/{id}', [UserController::class,'destroy']);
      Route::get('status/{id}', [UserController::class, 'status']);
});
