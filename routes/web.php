<?php

use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\BukuController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\SettingProfileController;
use Illuminate\Support\Facades\Auth;
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

//login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/sign-up', [LoginController::class, 'signUp'])->name('sign-up');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register', [LoginController::class, 'register'])->name('register');

//profil
Route::get('/setting-profile/{id}', [SettingProfileController::class, 'getProfil'])->name('setting-profile');
Route::post('/update-profile/{id}', [SettingProfileController::class, 'updateProfil'])->name('update-profile');

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/noted-saja', [DashboardController::class, 'noted'])->name('noted-saja');

//buku 
Route::get('/buku',[BukuController::class, 'index'])->name('buku');
Route::get('/add-buku',[BukuController::class, 'create'])->name('add-buku');
Route::post('/simpan-buku',[BukuController::class, 'store'])->name('simpan-buku');
Route::get('/delete-buku/{id}',[BukuController::class, 'deleteBuku'])->name('delete-buku');
Route::get('/getid-buku/{id}',[BukuController::class, 'getidBuku'])->name('getid-buku');
Route::post('/update-buku/{id}',[BukuController::class, 'updateBuku'])->name('update-buku');
Route::get('/search-buku',[BukuController::class, 'search'])->name('search-buku');

//berita
Route::get('/berita',[BeritaController::class, 'index'])->name('berita');
Route::get('/add-berita',[BeritaController::class, 'addBerita'])->name('add-berita');
Route::post('/simpan-berita',[BeritaController::class, 'storeBerita'])->name('simpan-berita');
Route::get('/getid-berita/{id}',[BeritaController::class, 'getidBerita'])->name('getid-berita');
Route::get('/delete-berita/{id}',[BeritaController::class, 'deleteBerita'])->name('delete-berita');
Route::post('/update-berita/{id}',[BeritaController::class, 'updateBerita'])->name('update-berita');