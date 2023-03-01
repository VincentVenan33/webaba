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

Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('auth');
Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('login', function () {
    $data = array();
        $data['title'] = "Login";
    return view('auth-login', $data);
})->name('login');

Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
Route::get('user/view', [UserdataController::class, 'viewuserdata'])->name('viewuserdata')->middleware('auth');
Route::get('user/add', [UserdataController::class, 'adduser'])->name('adduser')->middleware('auth');
Route::post('user/save', [UserdataController::class, 'saveuser'])->name('saveuser')->middleware('auth');
Route::get('user/change/{id}', [UserdataController::class, 'changeuser'])->name('changeuser')->middleware('auth');
Route::post('user/update', [UserdataController::class, 'updateuser'])->name('updateuser')->middleware('auth');
Route::get('user/delete/{id}', [UserdataController::class, 'deleteuser'])->name('deleteuser')->middleware('auth');