<?php

use App\Http\Controllers\Backend\BeritaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//backned
Route::get('getBerita',[BeritaController::class,'getBerita'])->name('getBerita');
Route::post('postBerita',[BeritaController::class,'postBerita'])->name('postBerita');
Route::delete('deleteBerita/{id}',[BeritaController::class,'deleteBerita'])->name('deleteBerita');
Route::post('updateBerita/{id}',[BeritaController::class,'updateBerita'])->name('updateBerita');
