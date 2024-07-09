<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Province;
use App\Models\Barangay;
use App\Models\Municipal;
use App\Models\City;

class LocationController extends Controller
{

    public function getLocationDataProvince($region_id)
    {
        $data = Province::where('region_id', $region_id)->get();

        return $data;
    }

    public function getLocationDataBrgy($mun_id)
    {
        $data = Barangay::where('municipal_id', $mun_id )->get();

        return $data;
    }

    public function getLocationDataMuni($prov_id)
    {
        $data = Municipal::where('province_id', $prov_id)->get();

        return $data;
    }

    public function getLocationDataCity($region_id)
    {
        $data = City::where('region_id', $region_id)->get();

        return $data;
    }


}