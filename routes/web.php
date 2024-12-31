<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\KritikDanSaranController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'HalamanLogin'])->name('login.index');
Route::post('/', [AuthController::class, 'login'])->name('login.proses');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout.proses');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/generate-pdf', [DashboardController::class, 'generatePDF'])->name('generate.pdf');

    Route::get('/add-mahasiswa', [DataMahasiswaController::class, 'index'])->name('addmahasiswa.index');
    Route::post('/store-mahasiswa', [DataMahasiswaController::class, 'store'])->name('addmahasiswa.store');
    Route::get('/edit-mahasiswa/{id}', [DataMahasiswaController::class, 'edit'])->name('addmahasiswa.edit');
    Route::put('/update-mahasiswa/{id}', [DataMahasiswaController::class, 'update'])->name('addmahasiswa.update');
    Route::get('/delete-mahasiswa/{id}', [DataMahasiswaController::class, 'destroy'])->name('addmahasiswa.delete');

    Route::get('/kritikdansaran', [KritikDanSaranController::class, 'index'])->name('kritikdansaran.index');
    Route::post('/kritikdansaranstore', [KritikDanSaranController::class, 'store'])->name('kritikdansaran.store');
    Route::get('/about', [DashboardController::class, 'about'])->name('about.index');
});

Route::get('/buatakun', [AuthController::class, 'register'])->name('buatakun.index');
Route::post('/buatakun', [AuthController::class, 'storeakun'])->name('buatakun.storeakun');
