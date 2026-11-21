<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
Route::get('/', [ProjectController::class, 'index'])->name('home');
Route::middleware('guest')->group(function () {
    Route::get('/daftar', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/daftar', [AuthController::class, 'register'])->name('register.store');
    Route::get('/masuk', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/masuk', [AuthController::class, 'login'])->name('login.store');
});
Route::post('/keluar', [AuthController::class, 'logout'])->name('logout');
Route::middleware('role:klien')->group(function () {
    Route::get('/proyek/baru', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/proyek', [ProjectController::class, 'store'])->name('projects.store');
});
Route::get('/proyek/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::view('/dasbor', 'placeholder')->name('dashboard');
Route::view('/admin', 'placeholder')->name('admin');
