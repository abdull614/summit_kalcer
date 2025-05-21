<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\KeranjangController;

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Google login
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::get('/', [
    PageController::class, 'home'
    ]) ->name('home');

Route::get('/login', [
    PageController::class, 'login'
    ]) ->name('login');

Route::get('/cara_sewa', [
    PageController::class, 'caraSewa'
    ])->name('cara.sewa');

// Route::get('/katalog_produk', [
//     PageController::class, 'katalogProduk'
//     ])->name('katalog.produk');
    
Route::get('/hubungi_kami', [
    PageController::class, 'hubungiKami'
    ])->name('hubungi.kami');


Route::get('/katalog_produk', [
    ProdukController::class, 'produk'
    ])->name('katalog.produk');

Route::get('/gambar-produk/{id}', [ProdukController::class, 'getNamaFileGambar']);



