<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    //View Home
    public function show()
    {
        return view('page.home', [
            'title' => 'Home'
        ]);
    }
}
