<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'placeholder')->name('home');
Route::view('/dasbor', 'placeholder')->name('dashboard');
Route::view('/admin', 'placeholder')->name('admin');
Route::view('/proyek/baru', 'placeholder')->name('projects.create');
Route::middleware('guest')->group(function () {
    Route::get('/daftar', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/daftar', [AuthController::class, 'register'])->name('register.store');
    Route::get('/masuk', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/masuk', [AuthController::class, 'login'])->name('login.store');
});
Route::post('/keluar', [AuthController::class, 'logout'])->name('logout');
