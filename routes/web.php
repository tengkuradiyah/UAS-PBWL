<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index']);
Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create']);
Route::post('/kategori', [App\Http\Controllers\KategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit']);
Route::patch('/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'update']);
Route::delete('/kategori/{id}',[App\Http\Controllers\KategoriController::class, 'destroy']);


Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index']);
Route::get('/barang/create', [App\Http\Controllers\BarangController::class, 'create']);
Route::post('/barang', [App\Http\Controllers\BarangController::class, 'store']);
Route::get('/barang/{id}/edit', [App\Http\Controllers\BarangController::class, 'edit']);
Route::patch('/barang/{id}', [App\Http\Controllers\BarangController::class, 'update']);
Route::delete('/barang/{id}', [App\Http\Controllers\BarangController::class, 'destroy']);

Route::get('/nota', [App\Http\Controllers\NotaController::class, 'index']);
Route::get('/nota/create', [App\Http\Controllers\NotaController::class, 'create']);
Route::post('/nota', [App\Http\Controllers\NotaController::class, 'store']);
Route::get('/nota/{id}/edit', [App\Http\Controllers\NotaController::class, 'edit']);
Route::patch('/nota/{id}', [App\Http\Controllers\NotaController::class, 'update']);
Route::delete('/nota/{id}', [App\Http\Controllers\NotaController::class, 'destroy']);