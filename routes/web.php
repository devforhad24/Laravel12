<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('about-us', function(){
//     $name = 'Taster2';
//     $email = 'tasster2@gmail.com';

//     return view('aboutus')->with('name', $name)->with('email', $email);
//     return view('aboutus', compact('name','email'));
//     return view('aboutus',['name' => $name, 'email' => $email]);
// });

Route::get('about-us/{name}/{email}', function($name, $email){
    return view('aboutus', compact('name', 'email'));
});

// Route::view('contact-us', 'contactus', ['id' => '123', 'email' => 'emailtest.com']);
Route::view('contact-us/{id}/{email}', 'contactus');