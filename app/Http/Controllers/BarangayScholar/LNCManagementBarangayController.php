<?php

namespace App\Http\Controllers\BarangayScholar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\MellpiproLNCManagement;
use App\Models\MellpiproLNCManagementTracking;

class LNCManagementBarangayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('BarangayScholar.LNCManagement.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BarangayScholar.LNCManagement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
           //dd($request);
           $rules = [
            'barangay_id' => 'required|integer',
            'municipal_id' => 'required|integer',
            'province_id' => 'required|integer',
            'region_id' => 'required|integer',
            'dateMonitoring' => 'required|date|max:255',
            'periodCovereda' => 'required|string |max:255',
            'periodCoveredb' => 'required|string|max:255',
            'rating4a' => 'required|string|max:255',
            'rating4b' => 'required|string|max:255',
            'rating4c' => 'required|string|max:255',
            'rating4d' => 'required|string|max:255',
            'rating4e' => 'required|string|max:255',
            'rating4f' => 'required|string|max:255',
            'rating4g' => 'required|string|max:255',
            
            'remarks4a' => 'required|string|max:255',
            'remarks4b' => 'required|string|max:255',
            'remarks4c' => 'required|string|max:255',
            'remarks4d' => 'required|string|max:255',
            'remarks4e' => 'required|string|max:255',
            'remarks4f' => 'required|string|max:255',
            'remarks4g' => 'required|string|max:255',


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
        }

            $govbarangay = MellpiproLNCManagement::create([
                'barangay_id' =>  $request->barangay_id,
                'municipal_id' =>  $request->municipal_id,
                'province_id' =>  $request->province_id,
                'region_id' =>  $request->region_id,
                'dateMonitoring' =>  $request->dateMonitoring,
                'periodCovereda' =>  $request->periodCovereda,
                'periodCoveredb' =>  $request->periodCoveredb,
                'rating4a' =>  $request->rating4a,
                'rating4b' =>  $request->rating4b,
                'rating4c' =>  $request->rating4c,
                'rating4d' =>  $request->rating4d,
                'rating4e' =>  $request->rating4e,
                'rating4f' =>  $request->rating4f,
                'rating4g' =>  $request->rating4g,

                'remarks4a' =>  $request->remarks4a,
                'remarks4b' =>  $request->remarks4b,
                'remarks4c' =>  $request->remarks4c,
                'remarks4d' =>  $request->remarks4d,
                'remarks4e' =>  $request->remarks4e,
                'remarks4f' =>  $request->remarks4f,
                'remarks4g' =>  $request->remarks4g, 
                'status' =>  $request->status,
                'user_id' =>  $request->user_id,
                'dateCreated' =>  $request->dateCreated,
                'dateUpdates' =>  $request->dateUpdates,
            ]); 
            MellpiproLNCManagementTracking::create([
                'mplgubrgygovernance_id' => $govbarangay->id,
                'status' => $request->status,
                'barangay_id' => auth()->user()->barangay,
                'municipal_id' => auth()->user()->city_municipal,
                'user_id' => auth()->user()->id,
            ]);
        




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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
