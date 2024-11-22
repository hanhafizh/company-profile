<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

// AUTH
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticated']);
