<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\DashboardController;
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
    Route::post('/proyek/{id}/pilih', [BidController::class, 'pick'])
        ->whereNumber('id')->name('bids.pick');
});
Route::get('/proyek/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::post('/proyek/{id}/penawaran', [BidController::class, 'store'])
    ->whereNumber('id')
    ->middleware('role:developer')
    ->name('bids.store');
Route::get('/dasbor', [DashboardController::class, 'index'])
    ->middleware('role:klien,developer')
    ->name('dashboard');
Route::middleware('role:admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::patch('/users/{id}/role', [AdminController::class, 'updateRole'])
        ->whereNumber('id')->name('admin.users.role');
    Route::delete('/users/{id}', [AdminController::class, 'destroyUser'])
        ->whereNumber('id')->name('admin.users.destroy');
    Route::delete('/projects/{id}', [AdminController::class, 'destroyProject'])
        ->whereNumber('id')->name('admin.projects.destroy');
});
