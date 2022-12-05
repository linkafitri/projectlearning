<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\ProdukController;

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
        return view('admin.index');
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

