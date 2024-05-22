<?php

namespace App\Http\Controllers;

use App\Models\PersonnelDnaDirectoryModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersonnelDnaDirectoryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {
        return view('personnel_dna_directory/create.personnelDnaDirectoryIndex');
    }

    public function create()
    {
        return view('personnel_dna_directory/create.personnelDnaDirectory'); 
    }

    public function store() {
        
    }
}
