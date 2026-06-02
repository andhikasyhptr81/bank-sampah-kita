<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KontakController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Daftar nasabah
Route::get('/daftar', [HomeController::class, 'daftar'])->name('daftar');
Route::post('/daftar', [HomeController::class, 'storeDaftar'])->name('daftar.store');

// Tentang Kami
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

// Program Kerja
Route::get('/program', [ProgramController::class, 'index'])->name('program');

// Layanan & Harga
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');

// Kontak & Lokasi
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');
