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