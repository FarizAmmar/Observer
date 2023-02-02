<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //View Report
    public function show()
    {
        return view('page.report', [
            'title' => 'Report'
        ]);
    }

    //View Report-view
    public function view()
    {
        return view('page.report-view', [
            'title' => 'Report View'
        ]);
    }
}