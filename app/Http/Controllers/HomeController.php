<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Hadi';
        // return view('home',['name' => $name]);
        return view('home', compact('name'));
    }
}
