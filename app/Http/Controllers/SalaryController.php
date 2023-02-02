<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    //View Salary
    public function show()
    {
        return view('page.salary', [
            'title' => 'Salary',
            'employees' => User::with(['position', 'level', 'salary'])->latest()->filter(request(['search', 'name', 'position', 'access']))->paginate(10)->withQueryString()
        ]);
    }
}
