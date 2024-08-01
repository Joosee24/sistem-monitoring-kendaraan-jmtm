<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

// Route untuk halaman Home
// Route untuk Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Route untuk Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk Admin dengan middleware auth dan admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/register', [AdminController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.post');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
});
