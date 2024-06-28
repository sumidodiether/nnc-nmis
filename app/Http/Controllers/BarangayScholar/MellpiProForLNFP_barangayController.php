<?php

namespace App\Http\Controllers\BarangayScholar;

use App\Models\MellpiProForLNFP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MellpiProForLNFP_barangayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('BarangayScholar/MellpiProForLNFP.MellpiProForLNFPIndex');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MellpiProForLNFP $mellpiProForLNFP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MellpiProForLNFP $mellpiProForLNFP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MellpiProForLNFP $mellpiProForLNFP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MellpiProForLNFP $mellpiProForLNFP)
    {
        //
    }
}
