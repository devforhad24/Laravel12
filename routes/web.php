<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('details')->group(function(){
    Route::get('student', function(){
        return 'This is student';
    })->name('student-details');
    
    Route::get('teacher', function(){
        return 'This is teacher';
    })->name('teacher-details');
});