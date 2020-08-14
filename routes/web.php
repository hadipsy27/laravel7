<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $postBody = 'lorem ipum sit dolor
    amet yo mas';
    return view('welcome',['body' => $postBody]);
});

