<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutritionOfficesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {
        return view('nutrition_offices.nutritionOfficesIndex');
    }
}
