<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicDashboardController extends Controller
{
    //
    public function index()
    {
        return view('publicDashboardViews');
    }
}
