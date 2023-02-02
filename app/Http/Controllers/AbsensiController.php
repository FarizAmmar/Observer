<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    //View Absensi
    public function show()
    {
        return view('page.absensi', [
            'title' => 'Absensi'
        ]);
    }

    // View New Absensi
    public function new()
    {
        return view('page.new-absensi', [
            'title' => 'New Absensi'
        ]);
    }

    // View Edit Absensi
    public function edit()
    {
        return view('page.edit-absensi', [
            'title' => 'Edit Absensi'
        ]);
    }
}