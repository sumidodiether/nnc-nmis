<?php

namespace App\Http\Controllers\BarangayScholar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\MellpiproLGUBarangayVisionMission;
use App\Models\MellpiproLGUBarangayVisionMissionTracker;
use App\Models\Province;
use App\Models\Barangay;
use App\Models\Municipal;
use App\Models\City;

class VisionMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangay = auth()->user()->barangay; 
        $vmlocation = DB::table('mplgubrgyvisionmissions')->where('barangay_id', $barangay)->get();
        
        return view('BarangayScholar.VisionMission.index', ['vmlocation' => $vmlocation]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prov = Province::where('region_id', auth()->user()->Region)->get();
        $mun = Municipal::where('province_id', auth()->user()->Province)->get();
        $city = City::where('region_id', auth()->user()->Region)->get();
        $brgy = Barangay::where('municipal_id', auth()->user()->city_municipal )->get();
        
        $years = range(1900, strftime("%Y", time()));


        return view('BarangayScholar.VisionMission.create', compact('prov', 'mun', 'city', 'brgy', 'years'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $rules = [
            'barangay_id' => 'required|integer',
            'municipal_id' => 'required|integer',
            'province_id' => 'required|integer',
            'region_id' => 'required|integer',
            'dateMonitoring' => 'required|date|max:255',
            'periodCovereda' => 'required|string |max:255',
            'periodCoveredb' => 'required|string|max:255',
            'rating1a' => 'required|string|max:255',
            'rating1b' => 'required|string|max:255',
            'rating1c' => 'required|string|max:255',
            'remarks1a' => 'required|string|max:255',
            'remarks1b' => 'required|string|max:255',
            'remarks1c' => 'required|string|max:255', 
            'status' => 'required|string|max:255',
            'dateCreated' => 'required|date ',
            'dateUpdates' => 'required|date ',
            'user_id' => 'required|integer',
    
        ]; 

        $validator = Validator::make($request->all() , $rules);

        if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }else {

            $vmBarangay = MellpiproLGUBarangayVisionMission::create([
                'barangay_id' =>  $request->barangay_id,
                'municipal_id' =>  $request->municipal_id,
                'province_id' =>  $request->province_id,
                'region_id' =>  $request->region_id,
                'dateMonitoring' =>  $request->dateMonitoring,
                'periodCovereda' =>  $request->periodCovereda,
                'periodCoveredb' =>  $request->periodCoveredb,
                'rating1a' =>  $request->rating1a,
                'rating1b' =>  $request->rating1b,
                'rating1c' =>  $request->rating1c,
                'remarks1a' =>  $request->remarks1a,
                'remarks1b' =>  $request->remarks1b,
                'remarks1c' =>  $request->remarks1c,
                'status' =>  $request->status,
                'user_id' =>  $request->user_id,
                'dateCreated' =>  $request->dateCreated,
                'dateUpdates' =>  $request->dateUpdates,
            ]); 
            MellpiproLGUBarangayVisionMissionTracker::create([
                'mplgubrgyvisionmissions_id' => $vmBarangay->id,
                'status' => $request->status,
                'barangay_id' => auth()->user()->barangay,
                'municipal_id' => auth()->user()->city_municipal,
                'user_id' => auth()->user()->id,
            ]);
        }

        return redirect('BarangayScholar/visionmission');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $vmbarangay = DB::table('mplgubrgyvisionmissions')->where('id', $request->id)->first();
        return view('BarangayScholar.VisionMission.edit', ['vmbarangay' => $vmbarangay ])->with('success', 'Created successfully!');
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         //dd($request);
         $rules = [
            'barangay_id' => 'required|integer',
            'municipal_id' => 'required|integer',
            'province_id' => 'required|integer',
            'region_id' => 'required|integer',
            'dateMonitoring' => 'required|date|max:255',
            'periodCovereda' => 'required|string |max:255',
            'periodCoveredb' => 'required|string|max:255',
            'rating1a' => 'required|string|max:255',
            'rating1b' => 'required|string|max:255',
            'rating1c' => 'required|string|max:255',
            'remarks1a' => 'required|string|max:255',
            'remarks1b' => 'required|string|max:255',
            'remarks1c' => 'required|string|max:255', 
            'status' => 'required|string|max:255',
            'dateCreated' => 'required|date ',
            'dateUpdates' => 'required|date ',
            'user_id' => 'required|integer',
    
        ]; 

        $validator = Validator::make($request->all() , $rules);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }else {
            $vmbarangay = MellpiproLGUBarangayVisionMission::find($id);
            
            //dd($vmbarangay);
            $vmbarangay->update([
                'barangay_id' =>  $request->barangay_id,
                'municipal_id' =>  $request->municipal_id,
                'province_id' =>  $request->province_id,
                'region_id' =>  $request->region_id,
                'dateMonitoring' =>  $request->dateMonitoring,
                'periodCovereda' =>  $request->periodCovereda,
                'periodCoveredb' =>  $request->periodCoveredb,
                'rating1a' =>  $request->rating1a,
                'rating1b' =>  $request->rating1b,
                'rating1c' =>  $request->rating1c,
                'remarks1a' =>  $request->remarks1a,
                'remarks1b' =>  $request->remarks1b,
                'remarks1c' =>  $request->remarks1c,
                'status' =>  $request->status,
                'user_id' =>  $request->user_id,
                'dateCreated' =>  $request->dateCreated,
                'dateUpdates' =>  $request->dateUpdates,
            ]); 
        }



        // mlplgubrgytracking::create([
        //     'mplgubrgyvisionmissions_id' => $vmbarangay->id,
        //     'status' => $request->status,
        //     'barangay_id' => auth()->user()->barangay,
        //     'municipal_id' => auth()->user()->city_municipal,
        //     'user_id' => auth()->user()->id,
        // ]);

        return redirect()->route('visionmission.index')->with('success', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        //dd($id);
        DB::table('mplgubrgyvisionmissionstracking')->where('mplgubrgyvisionmissions_id', $id)->delete();
        $lguprofile = MellpiproLGUBarangayVisionMission::find($id); 
        $lguprofile->delete();
        return redirect()->route('visionmission.index')->with('success', 'Deleted successfully!');
    }
}
