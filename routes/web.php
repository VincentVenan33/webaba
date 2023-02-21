<?php

use App\Http\Controllers\UserdataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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
    $data = array();
    $data['title'] = "Home";
    return view('index', $data);
})->middleware('auth');
// Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('login', function () {
    return view('auth-login');
})->name('login');

Route::get('login-half', function () {
    return view('auth-login-half');
});

Route::get('confirm', function () {
    return view('auth-confirm');
});

Route::get('register', function () {
    return view('auth-register');
});

// Route::get('user_data', function () {
//     return view('user_data');
// });
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
Route::get('user/view', [UserdataController::class, 'viewuserdata'])->name('viewuserdata')->middleware('auth');
Route::get('user/add', [UserdataController::class, 'adduser'])->name('adduser')->middleware('auth');
Route::post('user/save', [UserdataController::class, 'saveuser'])->name('saveuser')->middleware('auth');
Route::get('user/change/{id}', [UserdataController::class, 'changeuser'])->name('changeuser')->middleware('auth');
Route::post('user/update', [UserdataController::class, 'updateuser'])->name('updateuser')->middleware('auth');
Route::get('user/delete/{id}', [UserdataController::class, 'deleteuser'])->name('deleteuser')->middleware('auth');