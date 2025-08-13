<?php

use App\Http\Controllers\admin\DashboardController;
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
