<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //View App
    public function show()
    {
        return view('app');
    }
}