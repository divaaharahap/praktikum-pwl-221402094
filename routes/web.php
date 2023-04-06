<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware++ group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/daftar_mhs', 'App\Http\Controllers\MahasiswaController@index');

//Route::get('/daftar_mhs', [MahasiswaController::class, 'index']);

//Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);

// Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
 
// Route::get('/admin/dashboard', [AdminController::class, 'index']);

use App\Http\Controllers\AdminController;
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/postingan', [AdminController::class, 'show_postingan']);
Route::get('/admin/arsip', [AdminController::class, 'show_arsip']);
Route::get('/admin/user', [AdminController::class, 'show_user']);
Route::get('/admin/setting', [AdminController::class, 'show_setting']);
Route::get('/admin/messages', [AdminController::class, 'show_messages']);