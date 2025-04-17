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
Route::view('list-camera','camera/index');
Route::view('camera/create','camera/create');
Route::view('camera/view','camera/view');
Route::view('camera/map','camera/map');
Route::view('dashboard','home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
