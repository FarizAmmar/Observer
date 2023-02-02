<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotonganController extends Controller
{
    //View Potongan
    public function index()
    {
        return view('page.potongan', [
            'title' => 'Potongan'
        ]);
    }

    // View New Potongan
    public function new()
    {
        return view('page.new-potongan', [
            'title' => 'New Potongan'
        ]);
    }

    // View Edit Potongan
    public function edit()
    {
        return view('page.edit-potongan', [
            'title' => 'Edit Potongan'
        ]);
    }
}