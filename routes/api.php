<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukApiController;
use App\Http\Controllers\PaketApiController;

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

//api produk
Route::get('produks', [ProdukApiController::class, 'index']);
Route::post('produks', [ProdukApiController::class, 'store']);
Route::get('produks/{id}', [ProdukApiController::class, 'show']);
Route::put('produks/{id}', [ProdukApiController::class, 'update']);
Route::delete('produks/{id}', [ProdukApiController::class, 'destroy']);

//api paket
Route::get('pakets', [PaketApiController::class, 'index']);
Route::post('pakets', [PaketApiController::class, 'store']);
Route::get('pakets/{id}', [PaketApiController::class, 'show']);
Route::put('pakets/{id}', [PaketApiController::class, 'update']);
Route::delete('pakets/{id}', [PaketApiController::class, 'destroy']);