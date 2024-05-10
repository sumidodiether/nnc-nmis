<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentInventoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {
        return view('equipment_inventory/create.equipmentInventoryIndex');
    }

    public function create()
    {
        return view('equipment_inventory/create.equipmentInventory'); 
    }
}
