<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    //View Salary
    public function show()
    {
        return view('page.salary', [
            'title' => 'Salary'
        ]);
    }
}