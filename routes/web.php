<?php

use App\Http\Controllers\Frontend\BukuController;
use App\Http\Controllers\Frontend\DashboardController;
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
// php artisan config:cache
// php artisan cache:clear php
// artisan route:cache
// src="{{ asset('storage/'.$att_buku->gambar )}}" 
// src="storage/{{$att_buku->gambar}}" 

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/noted-saja', [DashboardController::class, 'noted'])->name('noted-saja');

Route::get('/buku',[BukuController::class, 'index'])->name('buku');
Route::get('/add-buku',[BukuController::class, 'create'])->name('add-buku');
Route::post('/simpan-buku',[BukuController::class, 'store'])->name('simpan-buku');
Route::get('/delete-buku/{id}',[BukuController::class, 'deleteBuku'])->name('delete-buku');
Route::get('/getid-buku/{id}',[BukuController::class, 'getidBuku'])->name('getid-buku');
Route::post('/update-buku/{id}',[BukuController::class, 'updateBuku'])->name('update-buku');

