<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create');
Route::post('posts/store', 'PostController@store');

Route::get('posts/{post:slug}/edit', 'PostController@edit');
Route::patch('posts/{post:slug}/edit', 'PostController@update');

// put -> untuk semua data yg di update
// patch -> untuk sebagian data yg di update

Route::get('posts/{post:slug}', 'PostController@show');

Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::view('/login', 'login');
