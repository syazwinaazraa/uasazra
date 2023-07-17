<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

Route::get('/pakaian', [App\Http\Controllers\PakaianController::class, 'index']);
Route::get('/pakaian/create', [App\Http\Controllers\PakaianController::class, 'create']);
Route::post('/pakaian', [App\Http\Controllers\PakaianController::class, 'store']);
Route::get('/pakaian/{id}/edit', [App\Http\Controllers\PakaianController::class, 'edit']);
Route::patch('/pakaian/{id}', [App\Http\Controllers\PakaianController::class, 'update']);
Route::delete('/pakaian/{id}', [App\Http\Controllers\PakaianController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\TransaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);

Route::get('/harga', [App\Http\Controllers\HargaController::class, 'index']);
Route::get('/harga/create', [App\Http\Controllers\HargaController::class, 'create']);
Route::post('/harga', [App\Http\Controllers\HargaController::class, 'store']);
Route::get('/harga/{id}/edit', [App\Http\Controllers\HargaController::class, 'edit']);
Route::patch('/harga/{id}', [App\Http\Controllers\HargaController::class, 'update']);
Route::delete('/harga/{id}', [App\Http\Controllers\HargaController::class, 'destroy']);