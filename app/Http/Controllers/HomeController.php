<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request => request()
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $name = 'Hadi';
        return view('home', compact('name'));
    }
}
