<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnelDnaDirectoryController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
     
    public function index()
    {
        return view('personnel_dna_directory/create.personnelDnaDirectoryIndex');
    }
}
