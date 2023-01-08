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
Route::get('produks/{id}/show', [ProdukApiController::class, 'show']);
Route::post('produks/add', [ProdukApiController::class, 'store']);
// Route::put('produks/{id}/update', [ProdukApiController::class, 'update']);
Route::post('produks/{id}/update', [ProdukApiController::class, 'update']);
Route::delete('produks/{id}/delete', [ProdukApiController::class, 'destroy']);

//api paket
Route::get('pakets', [PaketApiController::class, 'index']);
Route::get('pakets/{id}/show', [PaketApiController::class, 'show']);
Route::post('pakets/add', [PaketApiController::class, 'store']);
// Route::put('pakets/{id}/update', [ProdukApiController::class, 'update']);
Route::post('pakets/{id}/update', [PaketApiController::class, 'update']);
Route::delete('pakets/{id}/delete', [PaketApiController::class, 'destroy']);