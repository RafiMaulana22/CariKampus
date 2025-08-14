<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FasilitasController;
use App\Http\Controllers\admin\KampusController;
use App\Http\Controllers\admin\ProdiController;
use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman login
Route::get('/login', [AuthController::class, 'Login'])->name('login');

// Route untuk halaman register
Route::get('/register', [AuthController::class, 'Register'])->name('register');

// Route untuk halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route untuk halaman kampus
Route::get('/kampus', [KampusController::class, 'index'])->name('kampus');
Route::get('/kampus/tambah', [KampusController::class, 'create'])->name('kampus.create');
Route::get('/kampus/{id}/edit', [KampusController::class, 'edit'])->name('kampus.edit');
Route::get('/kampus/{id}/detail', [KampusController::class, 'show'])->name('kampus.show');

// Route untuk halaman prodi
Route::get('/kampus/{id}/prodi', [ProdiController::class, 'index'])->name('kampus.prodi');

// Route untuk halaman fasilitas
Route::get('/kampus/{id}/fasilitas', [FasilitasController::class, 'index'])->name('kampus.fasilitas');
