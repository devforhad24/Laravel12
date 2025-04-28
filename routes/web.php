<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('student/{id}/{reg}', function($id, $reg){
    return 'Student ID '.$id. ' Registration Number '.$reg;
});

Route::fallback( function(){
    return 'This page not found! Try again letter';
});