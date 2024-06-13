<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    public function getProvinces()
    {
        // Fetch provinces from the nnc_db database
        $provinces = DB::connection('nnc_db')->table('provinces')->get();

        // Return the data as JSON
        return response()->json($provinces);
    }
}