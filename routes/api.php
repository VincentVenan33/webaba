<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('product',[PostController::class,'getProduct']);
Route::get('catalog',[PostController::class,'getCatalog']);
Route::get('team',[PostController::class,'getTeam']);
Route::get('contact',[PostController::class,'getContact']);
Route::post('contact',[PostController::class,'postContact']);
Route::get('pengunjung', [PostController::class, 'getpengunjung']);
Route::post('pengunjung', [PostController::class, 'getpengunjung']);
?>