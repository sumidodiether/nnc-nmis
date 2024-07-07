<?php

namespace App\Http\Controllers\CentralOfficer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CODashboardController extends Controller
{
     public function index (){
        return view('CentralOfficer.dashboard');
     }
}
