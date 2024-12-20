<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeaturelistController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OurfeatureController;
use App\Http\Controllers\OurworksController;
use Illuminate\Support\Facades\Route;

// Page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'services'])->name('services');
Route::get('/ourwork', [HomeController::class, 'ourwork'])->name('ourwork');
Route::get('ourwork/{id}', [HomeController::class, 'ourworkDetail'])->name('ourworksDetail');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Group Middleware untuk Admin
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('admin/ourworks', OurworksController::class)->middleware('auth');

    Route::resource('admin/landing', LandingController::class)->middleware('auth');

    Route::resource('admin/about', AboutController::class)->middleware('auth');

    Route::resource('admin/ourfeature', OurfeatureController::class)->middleware('auth');

    Route::resource('admin/featurelist', FeaturelistController::class)->middleware('auth');
    Route::resource('admin/faq', FaqController::class)->middleware('auth');


    // Configuration Group
    Route::prefix('setting')->group(function () {
        Route::prefix('organizations')->group(function () {
            Route::get('list', [OrganizationController::class, 'index'])->name('organizations.list');
            Route::get('create', [OrganizationController::class, 'create'])->name('organizations.create');
            Route::post('store', [OrganizationController::class, 'store'])->name('organizations.store');
            Route::get('edit/{id}', [OrganizationController::class, 'edit'])->name('organizations.edit');
            Route::put('update/{id}', [OrganizationController::class, 'update'])->name('organizations.update');
        });

        Route::prefix('events')->group(function () {
            Route::get('list', [EventController::class, 'index'])->name('events.list');
            Route::get('create', [EventController::class, 'create'])->name('events.create');
            Route::post('store', [EventController::class, 'store'])->name('events.store');
            Route::get('edit/{id}', [EventController::class, 'edit'])->name('events.edit');
            Route::put('update/{id}', [EventController::class, 'update'])->name('events.update');
        });
    });

    // Logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
