<?php

use App\Http\Controllers\UserdataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KatalogController;
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
//dashboard
Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('auth');
Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');
//login
Route::get('login', function () {
    $data = array();
        $data['title'] = "Login";
    return view('auth-login', $data);
})->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
//user data
Route::get('user/view', [UserdataController::class, 'viewuserdata'])->name('viewuserdata')->middleware('auth');
Route::get('user/add', [UserdataController::class, 'adduser'])->name('adduser')->middleware('auth');
Route::post('user/save', [UserdataController::class, 'saveuser'])->name('saveuser')->middleware('auth');
Route::get('user/change/{id}', [UserdataController::class, 'changeuser'])->name('changeuser')->middleware('auth');
Route::post('user/update', [UserdataController::class, 'updateuser'])->name('updateuser')->middleware('auth');
Route::get('user/delete/{id}', [UserdataController::class, 'deleteuser'])->name('deleteuser')->middleware('auth');
//produk
Route::get('produk/view', [ProdukController::class, 'viewproduk'])->name('viewproduk')->middleware('auth');
Route::get('produk/add', [ProdukController::class, 'addproduk'])->name('addproduk')->middleware('auth');
Route::post('produk/save', [ProdukController::class, 'saveproduk'])->name('saveproduk')->middleware('auth');
Route::get('produk/change/{id}', [ProdukController::class, 'changeproduk'])->name('changeproduk')->middleware('auth');
Route::post('produk/update', [ProdukController::class, 'updateproduk'])->name('updateproduk')->middleware('auth');
Route::get('produk/delete/{id}', [ProdukController::class, 'deleteproduk'])->name('deleteproduk')->middleware('auth');
//katalog
Route::get('katalog/view', [KatalogController::class, 'viewkatalog'])->name('viewkatalog')->middleware('auth');
Route::get('katalog/add', [KatalogController::class, 'addkatalog'])->name('addkatalog')->middleware('auth');
Route::post('katalog/save', [KatalogController::class, 'savekatalog'])->name('savekatalog')->middleware('auth');
Route::get('katalog/change/{id}', [KatalogController::class, 'changekatalog'])->name('changekatalog')->middleware('auth');
Route::post('katalog/update', [KatalogController::class, 'updatekatalog'])->name('updatekatalog')->middleware('auth');
Route::get('katalog/delete/{id}', [KatalogController::class, 'deletekatalog'])->name('deletekatalog')->middleware('auth');
?>