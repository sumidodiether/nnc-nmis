<?php

namespace App\Http\Controllers;

use App\Models\EquipmentInventoryModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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

    public function store(Request $request) {
            //dd($request->all());
            // //VALIDATE
            // $validateEquipmentInventory = $request->validate([
            //         'totalBarangay' => $request->inputtotalBarangay,
            //         'woodenHB' => $request->inputWHB,
            //         'nonWoodenHB' => $request->inputNonWHB,
            //         'defectiveHB' => $request->inputHBNonF,
            //         'totalHB' => $request->inputTotalHB,
            //         'availabilityHB' => $request->inputHBpercent,
            //         'steelRules' => $request->inputSteelRules,
            //         'microtoise' => $request->inputMicrotoise,
            //         'infantometer' => $request->inputInfantometer,
            //         'remarksHB' => $request->inputHBRemarks,
            //         'hangingType' => $request->inputWSHanging,
            //         'defectiveWS' => $request->inputWSNonF,
            //         'totalWS' => $request->inputTotalWS,
            //         'availabilityWS' => $request->inputWSpercent,
            //         'infatScale' => $request->inputInfantScale,
            //         'beamBalance' => $request->inputBeamBalance,
            //         'remarksWS' => $request->inputWSRemarks,
            //         'child' => $request->inputMChild,
            //         'defectiveMUAC_child' => $request->inputMNonFChild,
            //         'totalMUAC_Child' => $request->inputTotalChild,
            //         'availabilityMUAC_child' => $request->inputChildpercent,
            //         'adults' => $request->inputMAdult,
            //         'defectiveMUAC_adults' => $request->inputMNonFAdult,
            //         'totalMUAC_adults' => $request->inputTotalAdult,
            //         'availabilityMUAC_adults' => $request->inputAdultpercent,
            //         'remarksMUAC' => $request->inputMRemarks,
            //         'psgccode_id' => $request->inputPSGC,
            //         'psgccode_id' => $request->inputPSGC,
            //         'region_id' => $request->inputRegion,
            //         'region_id' => $request->inputRegion,
            //         'province_id' => $request->inputProvince,
            //         'province_id' => $request->inputProvince,
            //         'municipal_id' => $request->inputCM,
            //         'municipal_id' => $request->inputCM,
            //     ])
            // } 
            
            // //.return

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
            return redirect()->back()->with('success', 'Equipment Inventory successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            return "An error occurred: " . $th->getMessage();
        }
    }
}