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



Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/buku',[BukuController::class, 'index'])->name('buku');

//php artisan config:cache
//php artisan cache:clear
//php artisan route:cache