<?php

use App\Http\Controllers\KategoriSuratController;
use App\Http\Controllers\SuratController;
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
    return view('arsip.arsip');
});

Route::resource('kategori_surats', KategoriSuratController::class);
Route::resource('arsip_surat', SuratController::class);
