<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PaketController;

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
// Route::apiResource('produks', ProdukController::class);
Route::get('produks', [ProdukController::class, 'index']);
Route::get('produks/{id}/show', [ProdukController::class, 'show']);
Route::post('produks/add', [ProdukController::class, 'store']);

// Route::put('produks/{id}/update', [ProdukController::class, 'update']);
Route::post('produks/{id}/update', [ProdukController::class, 'update']);
Route::delete('produks/{id}/delete', [ProdukController::class, 'destroy']);

//api paket
// Route::apiResource('pakets', PaketController::class);
Route::get('pakets', [PaketController::class, 'index']);
Route::get('pakets/{id}/show', [PaketController::class, 'show']);
Route::post('pakets/add', [PaketController::class, 'store']);

// Route::put('pakets/{id}/update', [ProdukController::class, 'update']);
Route::post('pakets/{id}/update', [PaketController::class, 'update']);
Route::delete('pakets/{id}/delete', [PaketController::class, 'destroy']);