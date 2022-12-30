<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PaketController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('produk.view');
    })->name('dashboard');
});

Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

// semua route untuk user
Route::prefix('users')->group(function(){
    Route::get('/view',[UserController::class, 'UserView'])->name('user.view');
    Route::get('/add',[UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('users.delete');
});

Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

route::prefix('produk')->group(function(){
    Route::get('/view',[ProdukController::class, 'ProdukView'])->name('produk.view');
    Route::get('/add',[ProdukController::class, 'ProdukAdd'])->name('produk.add');
    Route::post('/store',[ProdukController::class, 'ProdukStore'])->name('produks.store');
    Route::get('/edit/{id}',[ProdukController::class, 'ProdukEdit'])->name('produks.edit');
    Route::post('/update/{id}',[ProdukController::class, 'ProdukUpdate'])->name('produks.update');
    Route::get('/delete/{id}',[ProdukController::class, 'ProdukDelete'])->name('produks.delete');
});

Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

route::prefix('paket')->group(function(){
    Route::get('/view',[PaketController::class, 'PaketView'])->name('paket.view');
    Route::get('/add',[PaketController::class, 'PaketAdd'])->name('paket.add');
    Route::post('/store',[PaketController::class, 'PaketStore'])->name('pakets.store');
    Route::get('/edit/{id}',[PaketController::class, 'PaketEdit'])->name('pakets.edit');
    Route::post('/update/{id}',[PaketController::class, 'PaketUpdate'])->name('pakets.update');
    Route::get('/delete/{id}',[PaketController::class, 'PaketDelete'])->name('pakets.delete');
});

