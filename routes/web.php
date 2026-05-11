<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthCountroller;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/auth', [AuthController::class, 'index'])->name('auth');

 
