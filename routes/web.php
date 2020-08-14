<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('contact', function(){
//     // request()->fullUrl()
//     // request()->path()

//     return request()->path() == 'contact' ? 'Sama' : 'Tidak';
//     // return request()->is('contact') ? 'sama' : 'Tidak';
// });

Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::view('/login', 'login');
