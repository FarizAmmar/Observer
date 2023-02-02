<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'title' => 'Home',
            'count' => User::count()
        ]);
    }
}
