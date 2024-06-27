<?php

namespace App\Http\Controllers\BarangayScholar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BSDashboardController extends Controller
{
     public function index (){
        return view('BarangayScholar.dashboard');
     }
}
