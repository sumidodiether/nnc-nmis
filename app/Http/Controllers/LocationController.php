<?php

namespace App\Http\Controllers\BarangayScholar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\MellpiprobarangayNationalpolicies;
use App\Models\mpbrgynationalPoliciestracking;
use App\Models\Province;
use App\Models\Barangay;
use App\Models\Municipal;
use App\Models\City;

class NutritionPoliciesController extends Controller
{

    public function getLocationData()
    {
        $prov = Province::where('region_id', auth()->user()->Region)->get();
        $mun = Municipal::where('province_id', auth()->user()->Province)->get();
        $city = City::where('region_id', auth()->user()->Region)->get();
        $brgy = Barangay::where('municipal_id', auth()->user()->city_municipal)->get();
        
        $years = range(date("Y"), 1900);

        return [
            'provinces' => $prov,
            'municipals' => $mun,
            'cities' => $city,
            'barangays' => $brgy,
            'years' => $years
        ];
    }



}