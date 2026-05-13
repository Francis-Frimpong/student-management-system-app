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

Route::prefix('parent')
->name('parent.')
->controller(ParentController::class)
->group(function(){
    Route::get('/dashboard', 'index')->name('dashboard')->middleware('role:parent');
    Route::get('/children', 'children')->name('children')->middleware('role:parent');
    Route::get('/attendance', 'attendance')->name('attendance')->middleware('role:parent');
    Route::get('/message', 'message')->name('message')->middleware('role:parent');

});

 
