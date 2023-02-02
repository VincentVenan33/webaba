<?php

use App\Models\User_dataController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('auth-login');
});

Route::get('login-half', function () {
    return view('auth-login-half');
});

Route::get('confirm', function () {
    return view('auth-confirm');
});

Route::get('register', function () {
    return view('auth-register');
});

Route::get('user_data', function () {
    return view('user_data');
});

Route::get('user_data/tampil', [User_dataController::class, 'tampiluser_data'])->name('tampiluser_data')->middleware('auth');
Route::get('user_data/tambah', [User_dataController::class, 'tambahuser_data'])->name('tambahuser_data')->middleware('auth');
Route::post('user_data/simpan', [User_dataController::class, 'simpanuser_data'])->name('simpanuser_data')->middleware('auth');