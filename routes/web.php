<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'services'])->name('services');
Route::get('/ourwork', [HomeController::class, 'ourwork'])->name('ourwork');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Group Middleware untuk Admin
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Configuration Group
    Route::prefix('setting')->group(function () {
        Route::get('organization-setup', [DashboardController::class, 'organization'])->name('organization-setup');
        Route::get('event-setup', [DashboardController::class, 'event'])->name('event-setup');
    });

    // Logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});