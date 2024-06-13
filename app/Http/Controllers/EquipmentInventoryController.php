<?php

namespace App\Http\Controllers;

use App\Models\EquipmentInventoryModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EquipmentInventoryController extends Controller
{

    public function getProvinces()
    {
        try {
            $provinces = DB::connection('nnc_db')->table('provinces')->get(['id', 'province']);
            return response()->json($provinces);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch provinces data. Please try again later.'], 500);
        }
    }

    public function getProvincesByRegion($regionId)
    {
        try {
            $provinces = DB::connection('nnc_db')->table('provinces')->where('region_id', $regionId)->get(['provcode', 'province']);
            return response()->json($provinces);
        } catch (\Exception $e) { 
            return response()->json(['error' => 'Failed to fetch provinces data. Please try again later.'], 500);
        }
    }

    public function getCitiesByProvince($provcode)
    {
        try {
            $cities = DB::connection('nnc_db')->table('cities')->where('provcode', $provcode)->get(['provcode', 'cityname']);
            return response()->json($cities);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch cities data. Please try again later.'], 500);
        }
    }    

    public function getRegions()
    {
        try {
            $regions = DB::connection('nnc_db')->table('regions')->get(['id', 'region']);
            return response()->json($regions);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch regions data. Please try again later.'], 500);
        }
    }

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

    public function store(Request $request) {

        try {
          
            $addEquipmentInventory = new EquipmentInventoryModel;

            $addEquipmentInventory->totalBarangay  =   $request->input('inputtotalBarangay');
            $addEquipmentInventory->woodenHB  =        $request->input('inputWHB');
            $addEquipmentInventory->nonWoodenHB  =     $request->input('inputNonWHB');
            $addEquipmentInventory->defectiveHB  =     $request->input('inputHBNonF');
            $addEquipmentInventory->totalHB  =         $request->input('inputTotalHB');
            $addEquipmentInventory->availabilityHB  =  $request->input('inputHBpercent');
            $addEquipmentInventory->steelRules  =      $request->input('inputSteelRules');
            $addEquipmentInventory->microtoise  =       $request->input('inputMicrotoise');
            $addEquipmentInventory->infantometer  =      $request->input('inputInfantometer');
            $addEquipmentInventory->remarksHB  =        $request->input('inputHBRemarks');
            $addEquipmentInventory->hangingType  =   $request->input('inputWSHanging');
            $addEquipmentInventory->defectiveWS  =   $request->input('inputWSNonF');
            $addEquipmentInventory->totalWS  =   $request->input('inputTotalWS');
            $addEquipmentInventory->availabilityWS  =   $request->input('inputWSpercent');
            $addEquipmentInventory->infatScale  =   $request->input('inputInfantScale');
            $addEquipmentInventory->beamBalance  =   $request->input('inputBeamBalance');
            $addEquipmentInventory->remarksWS  =   $request->input('inputWSRemarks');
            $addEquipmentInventory->child  =       $request->input('inputMChild');
            $addEquipmentInventory->defectiveMUAC_child  =   $request->input('inputMNonFChild');
            $addEquipmentInventory->totalMUAC_Child  =   $request->input('inputTotalChild');
            $addEquipmentInventory->availabilityMUAC_child  =   $request->input('inputChildpercent');
            $addEquipmentInventory->adults  =   $request->input('inputMAdult');
            $addEquipmentInventory->defectiveMUAC_adults  =   $request->input('inputMNonFAdult');
            $addEquipmentInventory->totalMUAC_adults  =   $request->input('inputTotalAdult');
            $addEquipmentInventory->availabilityMUAC_adults  =   $request->input('inputAdultpercent');
            $addEquipmentInventory->remarksMUAC  =   $request->input('inputMRemarks');

            $addEquipmentInventory->psgccode_id  =   $request->input('inputPSGC');
            $addEquipmentInventory->psgccode_id  =   $request->input('inputPSGC');

            $addEquipmentInventory->region_id  =   $request->input('inputRegion');
            $addEquipmentInventory->region_id  =   $request->input('inputRegion');

            $addEquipmentInventory->province_id  =   $request->input('inputProvince');
            $addEquipmentInventory->province_id  =   $request->input('inputProvince');

            $addEquipmentInventory->municipal_id  =   $request->input('inputCM');
            $addEquipmentInventory->municipal_id  =   $request->input('inputCM');

            $addEquipmentInventory->save();
            return redirect()->back()->with('success', 'Equipment Inventory added successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            return "An error occurred: " . $th->getMessage();
        }
    }
}