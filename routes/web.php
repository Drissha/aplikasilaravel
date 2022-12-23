<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;


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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');

Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/mahasiswa/create',[MahasiswaController::class,'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class,'store']);
Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class,'edit']);
Route::post('/mahasiswa/{id}/update',[MahasiswaController::class,'update']);
Route::get('/mahasiswa/{id}/delete',[MahasiswaController::class,'destroy']);

Route::get('/mahasiswa/search',[MahasiswaController::class,'search']);
