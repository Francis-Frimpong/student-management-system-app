<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/auth', [AuthController::class, 'index'])->name('auth');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/teacher/dashboard', [TeacherController::class, 'index'])->name('teacher')->middleware('role:teacher');

Route::get('/parent/dashboard', [ParentController::class, 'index'])->name('parent')->middleware('role:parent');

 
