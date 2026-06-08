<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/auth', [AuthController::class, 'index'])->name('auth');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Parents routes (Grouped)
Route::prefix('parent')
->name('parent.')
->controller(ParentController::class)
->group(function(){
    Route::get('/dashboard', 'index')->name('dashboard')->middleware('role:parent');
    Route::get('/children', 'children')->name('children')->middleware('role:parent');
    Route::get('/attendance', 'attendance')->name('attendance')->middleware('role:parent');

    Route::get('/message', 'message')->name('message')->middleware('role:parent');

    Route::get('/compose', 'composeMessage')->name('composeMessage')->middleware('role:parent');

    Route::post('/storeMessage', 'storeMessage')->name('storeMessage')->middleware('role:parent');
});

// Teacher routes (Grouped)
Route::prefix('teacher')
->name('teacher.')
->controller(TeacherController::class)
->group(function(){
    Route::get('/dashboard','index')->name('dashboard')->middleware('role:teacher');
    Route::get('/classes','classes')->name('classes')->middleware('role:teacher');
    Route::get('/students','students')->name('students')->middleware('role:teacher');
    Route::get('/attendance','attendance')->name('attendance')->middleware('role:teacher');

    Route::get('/messages', 'messages')->name('messages')->middleware('role:teacher');

    Route::get('/compose', 'composeMessage')->name('composeMessage')->middleware('role:teacher');

     Route::post('/storeMessage', 'storeMessage')->name('storeMessage')->middleware('role:teacher');

      Route::get('/read/{id}', 'viewMessage')->name('viewMessage')->middleware('role:teacher');

     Route::get('/sent', 'sentMessage')->name('sentMessage')->middleware('role:teacher');

    Route::post('/attendance','storeattendance')->name('attendance.storeattendance')->middleware('role:teacher');

    Route::get('/assignments','assignments')->name('assignments')->middleware('role:teacher');

    Route::post('/assignments','storeassignments')->name('assignments.storeassignments')->middleware('role:teacher');

});

// Admin routes (Grouped)
Route::prefix('admin')
->name('admin.')
->controller(AdminController::class)
->group(function(){
    Route::get('/dashboard','index')->name('dashboard')->middleware('role:admin');
    
    Route::get('/users', 'users')->name('users')->middleware('role:admin');

    Route::get('/classes', 'classes')->name('classes')->middleware('role:admin');

    Route::get('/students', 'students')->name('students')->middleware('role:admin');

    Route::get('/addusers', 'create')->name('addusers')->middleware('role:admin');

    Route::post('/addusers', 'store')->name('addusers.store')->middleware('role:admin');
    
    Route::get('/addclass', 'addclass')->name('addclass')->middleware('role:admin');
    
    Route::post('/addclass', 'storeclass')->name('addclass.storeclass')->middleware('role:admin');

    // messages route
    Route::get('/messages', 'messages')->name('messages')->middleware('role:admin');

    Route::get('/compose', 'composeMessage')->name('composeMessage')->middleware('role:admin');

    Route::post('/storeMessage', 'storeMessage')->name('storeMessage')->middleware('role:admin');

    Route::get('/read/{id}', 'viewMessage')->name('viewMessage')->middleware('role:admin');


    Route::get('/sent', 'sentMessage')->name('sentMessage')->middleware('role:admin');
    
    Route::get('/edituser/{id}', 'edit')->name('edit')->middleware('role:admin');

    Route::get('/addstudent', 'addstudents')->name('addstudent')->middleware('role:admin');

    Route::post('/addstudent', 'storestudent')->name('addstudent.storestudent')->middleware('role:admin');

    Route::post('/updateuser/{id}', 'update')->name('update')->middleware('role:admin');


    Route::delete('/users/{id}', 'destroy')->name('destroy')->middleware('role:admin');

});


