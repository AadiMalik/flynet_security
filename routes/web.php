<?php

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

Route::view('/','auth/login');
Route::view('dashboard','home');
// My
Route::view('my-cameras','my/my_cameras');
Route::view('my-camera-view','my/my_camera_view');

Route::view('my-patrols','my/my_patrols');
Route::view('my-patrol-view','my/my_patrol_view');

Route::view('my-mosaics','my/my_mosaics');
Route::view('my-mosaic-view','my/my_mosaic_view');

Route::view('my-alarms','my/my_alarms');

Route::view('my-videos','my/my_videos');
Route::view('my-video-view','my/my_video_view');


Route::view('list-camera','camera/index');
Route::view('camera/create','camera/create');
Route::view('camera/view','camera/view');
Route::view('camera/map','camera/map');

Route::view('list-alarm','alarm/index');
Route::view('alarm/create','alarm/create');
Route::view('alarm/view','alarm/view');

Route::view('list-group','group/index');
Route::view('group/create','group/create');
Route::view('group/view','group/view');

Route::view('dashboard','home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
