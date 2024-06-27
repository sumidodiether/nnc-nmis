<?php

namespace App\Http\Controllers\BarangayScholar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LguProfile;
use App\Models\barangaytracking;
use Illuminate\Support\Facades\Validator;

class BSLGUprofileController extends Controller
{
    public function index() {
        $barangay = auth()->user()->barangay;
        //dd($barangay);
        $lguProfile = DB::table('lguprofilebarangay')->where('barangay_id', $barangay)->get();

        return view('BarangayScholar.lguprofile.index',['lguProfile' => $lguProfile]);

    }
 

    public function edit(LguProfile $LguProfile, Request $request) { 
       

        //dd($request->id);
        $lguProfile = DB::table('lguprofilebarangay')->where('id', $request->id)->first();
        //dd($lguProfile);


        return view('BarangayScholar.lguprofile.edit', ['lguProfile' => $lguProfile]) ;
    }

    public function create() {
        return view('BarangayScholar.lguprofile.create');
    }

    public function store(Request $request) {

        //dd($request);
            $rules = [
                'dateMonitoring' => 'required|date|max:255',
                'periodCovereda' => 'required|string |max:255',
                'periodCoveredb' => 'required|string|max:255',
                'totalPopulation' => 'required|string|max:255',
                'householdWater' => 'required|string|max:255',
                'householdToilets' => 'required|string|max:255',
                'dayCareCenter' => 'required|string|max:255',
                'elementary' => 'required|string|max:255',
                'secondarySchool' => 'required|string|max:255',
                'healthStations' => 'required|string|max:255',
                'retailOutlets' => 'required|string|max:255',
                'bakeries' => 'required|string|max:255',
                'markets' => 'required|string|max:255',
                'transportTerminals' => 'required|string|max:255',
                'breastfeeding' => 'required|string|max:255',
                'hazards' => 'required|string|max:255',
                'affectedLGU' => 'required|string|max:255',
                'noHousehold' => 'required|string|max:255',
                'noPuroks' => 'required|string|max:255',
                'populationA' => 'required|string|max:255', 
                'populationB' => 'required|string|max:255',  
                'populationC' => 'required|string|max:255',  
                'populationD' => 'required|string|max:255',  
                'populationE' => 'required|string|max:255',
                'populationF' => 'required|string|max:255',    
                'actualA' => 'required|string|max:255',  
                'actualB' => 'required|string|max:255',  
                'actualC' => 'required|string|max:255',  
                'actualD' => 'required|string|max:255',  
                'actualE' => 'required|string|max:255', 
                'actualF' => 'required|string|max:255',  
                'psnormalAAA' => 'required|string|max:255',
                'psunderweightAAA' => 'required|string|max:255',
                'pssevereUnderweightAAA' => 'required|string|max:255',
                'psoverweightAAA' => 'required|string|max:255',
                'psnormalBAA' => 'required|string|max:255',
                'psunderweightBAA' => 'required|string|max:255',
                'pssevereUnderweightBAA' => 'required|string|max:255',
                'psoverweightBAA' => 'required|string|max:255',
                'psnormalCAA' => 'required|string|max:255',
                'psunderweightCAA' => 'required|string|max:255',
                'pssevereUnderweightCAA' => 'required|string|max:255',
                'psoverweightCAA' => 'required|string|max:255',
                'psnormalABA' => 'required|string|max:255',
                'pswastedABA' => 'required|string|max:255',
                'psseverelyWastedABA' => 'required|string|max:255',
                'psoverweightABA' => 'required|string|max:255',
                'psobeseABA' => 'required|string|max:255',
                'psnormalBBA' => 'required|string|max:255',
                'pswastedBBA' => 'required|string|max:255',
                'psseverelyWastedBBA' => 'required|string|max:255',
                'psoverweightBBA' => 'required|string|max:255',
                'psobeseBBA' => 'required|string|max:255',
                'psnormalCCA' => 'required|string|max:255',
                'pswastedCCA' => 'required|string|max:255',
                'psseverelyWastedCCA' => 'required|string|max:255',
                'psoverweightCCA' => 'required|string|max:255',
                'psobeseCCA' => 'required|string|max:255',
                'psnormalAAB' => 'required|string|max:255',
                'psstuntedAAB' => 'required|string|max:255',
                'pssevereStuntedAAB' => 'required|string|max:255',
                'pstallAAB' => 'required|string|max:255',
                'psnormalBBB' => 'required|string|max:255',
                'psstuntedBBB' => 'required|string|max:255',
                'pssevereStuntedBBB' => 'required|string|max:255',
                'pstallBBB' => 'required|string|max:255',
                'psnormalCCC' => 'required|string|max:255',
                'psstuntedCCC' => 'required|string|max:255',
                'pssevereStuntedCCC' => 'required|string|max:255',
                'pstallCCC' => 'required|string|max:255',
                'scnormalABA' => 'required|string|max:255',
                'scwastedABA' => 'required|string|max:255',
                'scseverelyWastedABA' => 'required|string|max:255',
                'scoverweightABA' => 'required|string|max:255',
                'scobeseABA' => 'required|string|max:255',
                'scnormalBBA' => 'required|string|max:255',
                'scwastedBBA' => 'required|string|max:255',
                'scseverelyWastedBBA' => 'required|string|max:255',
                'scoverweightBBA' => 'required|string|max:255',
                'scobeseBBA' => 'required|string|max:255',
                'scnormalCCA' => 'required|string|max:255',
                'scwastedCCA' => 'required|string|max:255',
                'scseverelyWastedCCA' => 'required|string|max:255',
                'scoverweightCCA' => 'required|string|max:255',
                'scobeseCCA' => 'required|string|max:255',
                'pwnormalAAA' => 'required|string|max:255',
                'pwnutritionllyatriskAAA' => 'required|string|max:255',
                'pwoverweightAAA' => 'required|string|max:255',
                'pwobeseAAA' => 'required|string|max:255',
                'pwnormalBAA' => 'required|string|max:255',
                'pwnutritionllyatriskBAA' => 'required|string|max:255',
                'pwoverweightBAA' => 'required|string|max:255',
                'pwobeseBAA' => 'required|string|max:255',
                'pwnormalCAA' => 'required|string|max:255',
                'pwnutritionllyatriskCAA' => 'required|string|max:255',
                'pwoverweightCAA' => 'required|string|max:255',
                'pwobeseCAA' => 'required|string|max:255',
                'landAreaResidential' => 'required|string|max:255',
                'remarksResidential' => 'required|string|max:255',
                'landAreaCommercial' => 'required|string|max:255',
                'remarksCommercial' => 'required|string|max:255',
                'landAreaIndustrial' => 'required|string|max:255',
                'remarksIndustrial' => 'required|string|max:255',
                'landAreaAgricultural' => 'required|string|max:255',
                'remarksAgricultural' => 'required|string|max:255',
                'landAreaFLMLNP' => 'required|string|max:255',
                'remarksFLMLNP' => 'required|string|max:255',
                'Isource' => 'required|string|max:255',
                'Iavailreceived' => 'required|string|max:255',
                'Idatereceived' => 'required|date ',
                'Ivolumepax' => 'required|integer',
                'Iremarks' => 'required|string|max:255',
                'IIAsource' => 'required|string|max:255',
                'IIAavailreceived' => 'required|string|max:255',
                'IIAdatereceived' => 'required|date ',
                'IIAvolumepax' => 'required|integer',
                'IIAremarks' => 'required|string|max:255',
                'IIBsource' => 'required|string|max:255',
                'IIBavailreceived' => 'required|string|max:255',
                'IIBdatereceived' => 'required|date ',
                'IIBvolumepax' => 'required|string|max:255',
                'IIBremarks' => 'required|string|max:255',
                'IIIAsource' => 'required|string|max:255',
                'IIIAavailreceived' => 'required|string|max:255',
                'IIIAdatereceived' => 'required|date',
                'IIIAvolumepax' => 'required|string|max:255',
                'IIIAremarks' => 'required|string|max:255',
                'IIIBsource' => 'required|string|max:255',
                'IIIBavailreceived' => 'required|string|max:255',
                'IIIBdatereceived' => 'required|date',
                'IIIBvolumepax' => 'required|integer',
                'IIIBremarks' => 'required|string|max:255',
                'IIICsource' => 'required|string|max:255',
                'IIICavailreceived' => 'required|string|max:255',
                'IIICdatereceived' => 'required|date',
                'IIICvolumepax' => 'required|integer',
                'IIICremarks' => 'required|string|max:255',
                'IIIDsource' => 'required|string|max:255',
                'IIIDavailreceived' => 'required|string|max:255',
                'IIIDdatereceived' => 'required|date ',
                'IIIDvolumepax' => 'required|integer',
                'IIIDremarks' => 'required|string|max:255',
                'IIIEsource' => 'required|string|max:255',
                'IIIEavailreceived' => 'required|string|max:255',
                'IIIEdatereceived' => 'required|date ',
                'IIIEvolumepax' => 'required|integer',
                'IIIEremarks' => 'required|string|max:255',
                'IIIFsource' => 'required|string|max:255',
                'IIIFavailreceived' => 'required|string|max:255',
                'IIIFdatereceived' => 'required|date ',
                'IIIFvolumepax' => 'required|integer ',
                'IIIFremarks' => 'required|string|max:255',
                'IVAsource' => 'required|string|max:255',
                'IVAavailreceived' => 'required|string|max:255',
                'IVAdatereceived' => 'required|date ',
                'IVAvolumepax' => 'required|integer',
                'IVAremarks' => 'required|string|max:255',
                'VAsource' => 'required|string|max:255',
                'VAavailreceived' => 'required|string|max:255',
                'VAdatereceived' => 'required|date ',
                'VAvolumepax' => 'required|integer ',
                'VAremarks' => 'required|string|max:255',
                'status' => 'required|string|max:255',
                'dateCreated' => 'required|date ',
                'dateUpdates' => 'required|date ',
                'barangay_id' => 'required|integer',
                'municipal_id' => 'required|integer',
                'province_id' => 'required|integer',
                'region_id' => 'required|integer',
        
            ]; 

            $validator = Validator::make($request->all() , $rules);

            if($validator->fails()){
                return response()->json([
                    'errors' => $validator->errors()
                ], 422);
            }

                $LGUProfileBarangay = LguProfile::create([
                    'dateMonitoring'=> $request->dateMonitoring,
                    'periodCovereda' => $request->periodCovereda,
                    'periodCoveredb' => $request->periodCoveredb,
                    'totalPopulation' => $request->totalPopulation,
                    'householdWater' => $request->householdWater, 
                    'householdToilets' => $request->householdToilets, 
                    'dayCareCenter' => $request->dayCareCenter, 
                    'elementary' => $request->elementary, 
                    'secondarySchool' => $request->secondarySchool, 
                    'healthStations' => $request->healthStations, 
                    'retailOutlets' => $request->retailOutlets, 
                    'bakeries' => $request->bakeries, 
                    'markets' => $request->markets, 
                    'transportTerminals' => $request->transportTerminals, 
                    'breastfeeding' => $request->breastfeeding, 
                    'hazards' => $request->hazards, 
                    'affectedLGU' => $request->affectedLGU, 
                    'noHousehold' => $request->noHousehold, 
                    'noPuroks' => $request->noPuroks, 
                    'populationA' => $request->populationA,   
                    'populationB' => $request->populationB,   
                    'populationC' => $request->populationC,   
                    'populationD' => $request->populationD,   
                    'populationE' => $request->populationE,   
                    'populationF' => $request->populationF,
                    'actualA' => $request->actualA,  
                    'actualB' => $request->actualB,   
                    'actualC' => $request->actualC,   
                    'actualD' => $request->actualD,   
                    'actualE' => $request->actualE,   
                    'actualF' => $request->actualF,  
    
                    // overweight (%) overweight
                    'psnormalAAA' => $request->psnormalAAA, 
                    'psunderweightAAA' => $request->psunderweightAAA, 
                    'pssevereUnderweightAAA' => $request->pssevereUnderweightAAA, 
                    'psoverweightAAA' => $request->psoverweightAAA, 
    
                    'psnormalBAA' => $request->psnormalBAA, 
                    'psunderweightBAA' => $request->psunderweightBAA, 
                    'pssevereUnderweightBAA' => $request->pssevereUnderweightBAA, 
                    'psoverweightBAA' => $request->psoverweightBAA, 
    
                    'psnormalCAA' => $request->psnormalCAA, 
                    'psunderweightCAA' => $request->psunderweightCAA,
                    'pssevereUnderweightCAA' => $request->pssevereUnderweightCAA, 
                    'psoverweightCAA' => $request->psoverweightCAA, 
    
                    // overweight (%) obese
                    'psnormalABA' => $request->psnormalABA, 
                    'pswastedABA' => $request->pswastedABA, 
                    'psseverelyWastedABA' => $request->psseverelyWastedABA, 
                    'psoverweightABA' => $request->psoverweightABA, 
                    'psobeseABA' => $request->psobeseABA, 
    
                    'psnormalBBA' => $request->psnormalBBA, 
                    'pswastedBBA' => $request->pswastedBBA, 
                    'psseverelyWastedBBA' => $request->psseverelyWastedBBA, 
                    'psoverweightBBA' => $request->psoverweightBBA, 
                    'psobeseBBA' => $request->psobeseBBA, 
    
                    'psnormalCCA' => $request->psnormalCCA, 
                    'pswastedCCA' => $request->pswastedCCA, 
                    'psseverelyWastedCCA' => $request->psseverelyWastedCCA, 
                    'psoverweightCCA' => $request->psoverweightCCA, 
                    'psobeseCCA' => $request->psobeseCCA, 
    
                    // overweight (%) tall
                    'psnormalAAB' => $request->psnormalAAB, 
                    'psstuntedAAB' => $request->psstuntedAAB, 
                    'pssevereStuntedAAB' => $request->pssevereStuntedAAB, 
                    'pstallAAB' => $request->pstallAAB, 
    
                    'psnormalBBB' => $request->psnormalBBB, 
                    'psstuntedBBB' => $request->psstuntedBBB, 
                    'pssevereStuntedBBB' => $request->pssevereStuntedBBB, 
                    'pstallBBB' => $request->pstallBBB, 
    
                    'psnormalCCC' => $request->psnormalCCC, 
                    'psstuntedCCC' => $request->psstuntedCCC, 
                    'pssevereStuntedCCC' => $request->pssevereStuntedCCC, 
                    'pstallCCC' => $request->pstallCCC, 
    
                    // overweight (%) obese School Children
                    'scnormalABA' => $request->scnormalABA, 
                    'scwastedABA' => $request->scwastedABA, 
                    'scseverelyWastedABA' => $request->scseverelyWastedABA, 
                    'scoverweightABA' => $request->scoverweightABA, 
                    'scobeseABA' => $request->scobeseABA, 
    
                    'scnormalBBA' => $request->scnormalBBA, 
                    'scwastedBBA' => $request->scwastedABA, 
                    'scseverelyWastedBBA' => $request->scseverelyWastedBBA, 
                    'scoverweightBBA' => $request->scoverweightBBA, 
                    'scobeseBBA' => $request->scobeseBBA, 
    
                    'scnormalCCA' => $request->scnormalCCA, 
                    'scwastedCCA' => $request->scwastedCCA, 
                    'scseverelyWastedCCA' => $request->scseverelyWastedCCA, 
                    'scoverweightCCA' => $request->scoverweightCCA, 
                    'scobeseCCA' => $request->scobeseCCA,  
    
                    // overweight (%) obese Pregnant Woman
                    'pwnormalAAA' => $request->pwnormalAAA, 
                    'pwnutritionllyatriskAAA' => $request->pwnutritionllyatriskAAA, 
                    'pwoverweightAAA' => $request->pwoverweightAAA, 
                    'pwobeseAAA' => $request->pwobeseAAA, 
    
                    'pwnormalBAA' => $request->pwnormalBAA, 
                    'pwnutritionllyatriskBAA' => $request->pwnutritionllyatriskBAA, 
                    'pwoverweightBAA' => $request->pwoverweightBAA, 
                    'pwobeseBAA' => $request->pwobeseBAA, 
    
                    'pwnormalCAA' => $request->pwnormalCAA, 
                    'pwnutritionllyatriskCAA' => $request->pwnutritionllyatriskCAA, 
                    'pwoverweightCAA' => $request->pwoverweightCAA, 
                    'pwobeseCAA' => $request->pwobeseCAA, 
    
                    'landAreaResidential' => $request->landAreaResidential, 
                    'remarksResidential' => $request->remarksResidential, 
    
                    'landAreaCommercial' => $request->landAreaCommercial, 
                    'remarksCommercial' => $request->remarksCommercial, 
    
                    'landAreaIndustrial' => $request->landAreaIndustrial, 
                    'remarksIndustrial' => $request->remarksIndustrial, 
    
                    'landAreaAgricultural' => $request->landAreaAgricultural, 
                    'remarksAgricultural' => $request->remarksAgricultural, 
    
                    'landAreaFLMLNP' => $request->landAreaFLMLNP, 
                    'remarksFLMLNP' => $request->remarksFLMLNP, 
    
                    'Isource' => $request->Isource, 
                    'Iavailreceived' => $request->Iavailreceived, 
                    'Idatereceived' => $request->Idatereceived, 
                    'Ivolumepax' => $request->Ivolumepax, 
                    'Iremarks' => $request->Iremarks, 
    
                    'IIAsource' => $request->IIAsource, 
                    'IIAavailreceived' => $request->IIAavailreceived, 
                    'IIAdatereceived' => $request->IIAdatereceived, 
                    'IIAvolumepax' => $request->IIAvolumepax, 
                    'IIAremarks' => $request->IIAremarks, 
    
                    'IIBsource' => $request->IIBsource, 
                    'IIBavailreceived' => $request->IIBavailreceived, 
                    'IIBdatereceived' => $request->IIBdatereceived, 
                    'IIBvolumepax' => $request->IIBvolumepax, 
                    'IIBremarks' => $request->IIBremarks, 
    
                    'IIIAsource' => $request->IIIAsource, 
                    'IIIAavailreceived' => $request->IIIAavailreceived, 
                    'IIIAdatereceived' => $request->IIIAdatereceived, 
                    'IIIAvolumepax' => $request->IIIAvolumepax, 
                    'IIIAremarks' => $request->IIIAremarks, 
    
                    'IIIBsource' => $request->IIIBsource, 
                    'IIIBavailreceived' => $request->IIIBavailreceived, 
                    'IIIBdatereceived' => $request->IIIBdatereceived, 
                    'IIIBvolumepax' => $request->IIIBvolumepax, 
                    'IIIBremarks' => $request->IIIBremarks, 
    
                    'IIICsource' => $request->IIICsource, 
                    'IIICavailreceived' => $request->IIICavailreceived, 
                    'IIICdatereceived' => $request->IIICdatereceived, 
                    'IIICvolumepax' => $request->IIICvolumepax, 
                    'IIICremarks' => $request->IIICremarks, 
    
                    'IIIDsource' => $request->IIIDsource, 
                    'IIIDavailreceived' => $request->IIIDavailreceived, 
                    'IIIDdatereceived' => $request->IIIDdatereceived, 
                    'IIIDvolumepax' => $request->IIIDvolumepax, 
                    'IIIDremarks' => $request->IIIDremarks, 
    
                    'IIIEsource' => $request->IIIEsource, 
                    'IIIEavailreceived' => $request->IIIEavailreceived, 
                    'IIIEdatereceived' => $request->IIIEdatereceived, 
                    'IIIEvolumepax' => $request->IIIEvolumepax, 
                    'IIIEremarks' => $request->IIIEremarks, 
    
                    'IIIFsource' => $request->IIIFsource, 
                    'IIIFavailreceived' => $request->IIIFavailreceived, 
                    'IIIFdatereceived' => $request->IIIFdatereceived, 
                    'IIIFvolumepax' => $request->IIIFvolumepax, 
                    'IIIFremarks' => $request->IIIFremarks, 
    
                    'IVAsource' => $request->IVAsource, 
                    'IVAavailreceived' => $request->IVAavailreceived, 
                    'IVAdatereceived' => $request->IVAdatereceived, 
                    'IVAvolumepax' => $request->IVAvolumepax, 
                    'IVAremarks' => $request->IVAremarks, 
    
                    'VAsource' => $request->VAsource, 
                    'VAavailreceived' => $request->VAavailreceived, 
                    'VAdatereceived' => $request->VAdatereceived, 
                    'VAvolumepax' => $request->VAvolumepax, 
                    'VAremarks' => $request->VAremarks, 
    
                    'status' => $request->status, 
                    'dateCreated' => $request->dateCreated, 
                    'dateUpdates' => $request->dateUpdates, 
    
                    'barangay_id' =>$request->barangay_id,
                    'municipal_id' => $request->municipal_id, 
                    'province_id' => $request->province_id, 
                    'region_id' => $request->region_id, 
               
    
                ]);
    
        barangaytracking::create([
                    'lguprofilebarangay_id' => $LGUProfileBarangay->id,
                    'status' => $request->status,
                    'barangay_id' => auth()->user()->barangay,
                    'municipal_id' => auth()->user()->city_municipal,
                    'user_id' => auth()->user()->id,
                ]);

         
            

        return redirect('BarangayScholar/lguprofile');
    }


    
    public function update( Request $request , $id ) {
          
    
        
        //dd($request);
           $rules = [
            'dateMonitoring' => 'required|date|max:255',
            'periodCovereda' => 'required|string |max:255',
            'periodCoveredb' => 'required|string|max:255',
            'totalPopulation' => 'required|string|max:255',
            'householdWater' => 'required|string|max:255',
            'householdToilets' => 'required|string|max:255',
            'dayCareCenter' => 'required|string|max:255',
            'elementary' => 'required|string|max:255',
            'secondarySchool' => 'required|string|max:255',
            'healthStations' => 'required|string|max:255',
            'retailOutlets' => 'required|string|max:255',
            'bakeries' => 'required|string|max:255',
            'markets' => 'required|string|max:255',
            'transportTerminals' => 'required|string|max:255',
            'breastfeeding' => 'required|string|max:255',
            'hazards' => 'required|string|max:255',
            'affectedLGU' => 'required|string|max:255',
            'noHousehold' => 'required|string|max:255',
            'noPuroks' => 'required|string|max:255',
            'populationA' => 'required|string|max:255', 
            'populationB' => 'required|string|max:255',  
            'populationC' => 'required|string|max:255',  
            'populationD' => 'required|string|max:255',  
            'populationE' => 'required|string|max:255',
            'populationF' => 'required|string|max:255',    
            'actualA' => 'required|string|max:255',  
            'actualB' => 'required|string|max:255',  
            'actualC' => 'required|string|max:255',  
            'actualD' => 'required|string|max:255',  
            'actualE' => 'required|string|max:255', 
            'actualF' => 'required|string|max:255',  
            'psnormalAAA' => 'required|string|max:255',
            'psunderweightAAA' => 'required|string|max:255',
            'pssevereUnderweightAAA' => 'required|string|max:255',
            'psoverweightAAA' => 'required|string|max:255',
            'psnormalBAA' => 'required|string|max:255',
            'psunderweightBAA' => 'required|string|max:255',
            'pssevereUnderweightBAA' => 'required|string|max:255',
            'psoverweightBAA' => 'required|string|max:255',
            'psnormalCAA' => 'required|string|max:255',
            'psunderweightCAA' => 'required|string|max:255',
            'pssevereUnderweightCAA' => 'required|string|max:255',
            'psoverweightCAA' => 'required|string|max:255',
            'psnormalABA' => 'required|string|max:255',
            'pswastedABA' => 'required|string|max:255',
            'psseverelyWastedABA' => 'required|string|max:255',
            'psoverweightABA' => 'required|string|max:255',
            'psobeseABA' => 'required|string|max:255',
            'psnormalBBA' => 'required|string|max:255',
            'pswastedBBA' => 'required|string|max:255',
            'psseverelyWastedBBA' => 'required|string|max:255',
            'psoverweightBBA' => 'required|string|max:255',
            'psobeseBBA' => 'required|string|max:255',
            'psnormalCCA' => 'required|string|max:255',
            'pswastedCCA' => 'required|string|max:255',
            'psseverelyWastedCCA' => 'required|string|max:255',
            'psoverweightCCA' => 'required|string|max:255',
            'psobeseCCA' => 'required|string|max:255',
            'psnormalAAB' => 'required|string|max:255',
            'psstuntedAAB' => 'required|string|max:255',
            'pssevereStuntedAAB' => 'required|string|max:255',
            'pstallAAB' => 'required|string|max:255',
            'psnormalBBB' => 'required|string|max:255',
            'psstuntedBBB' => 'required|string|max:255',
            'pssevereStuntedBBB' => 'required|string|max:255',
            'pstallBBB' => 'required|string|max:255',
            'psnormalCCC' => 'required|string|max:255',
            'psstuntedCCC' => 'required|string|max:255',
            'pssevereStuntedCCC' => 'required|string|max:255',
            'pstallCCC' => 'required|string|max:255',
            'scnormalABA' => 'required|string|max:255',
            'scwastedABA' => 'required|string|max:255',
            'scseverelyWastedABA' => 'required|string|max:255',
            'scoverweightABA' => 'required|string|max:255',
            'scobeseABA' => 'required|string|max:255',
            'scnormalBBA' => 'required|string|max:255',
            'scwastedBBA' => 'required|string|max:255',
            'scseverelyWastedBBA' => 'required|string|max:255',
            'scoverweightBBA' => 'required|string|max:255',
            'scobeseBBA' => 'required|string|max:255',
            'scnormalCCA' => 'required|string|max:255',
            'scwastedCCA' => 'required|string|max:255',
            'scseverelyWastedCCA' => 'required|string|max:255',
            'scoverweightCCA' => 'required|string|max:255',
            'scobeseCCA' => 'required|string|max:255',
            'pwnormalAAA' => 'required|string|max:255',
            'pwnutritionllyatriskAAA' => 'required|string|max:255',
            'pwoverweightAAA' => 'required|string|max:255',
            'pwobeseAAA' => 'required|string|max:255',
            'pwnormalBAA' => 'required|string|max:255',
            'pwnutritionllyatriskBAA' => 'required|string|max:255',
            'pwoverweightBAA' => 'required|string|max:255',
            'pwobeseBAA' => 'required|string|max:255',
            'pwnormalCAA' => 'required|string|max:255',
            'pwnutritionllyatriskCAA' => 'required|string|max:255',
            'pwoverweightCAA' => 'required|string|max:255',
            'pwobeseCAA' => 'required|string|max:255',
            'landAreaResidential' => 'required|string|max:255',
            'remarksResidential' => 'required|string|max:255',
            'landAreaCommercial' => 'required|string|max:255',
            'remarksCommercial' => 'required|string|max:255',
            'landAreaIndustrial' => 'required|string|max:255',
            'remarksIndustrial' => 'required|string|max:255',
            'landAreaAgricultural' => 'required|string|max:255',
            'remarksAgricultural' => 'required|string|max:255',
            'landAreaFLMLNP' => 'required|string|max:255',
            'remarksFLMLNP' => 'required|string|max:255',
            'Isource' => 'required|string|max:255',
            'Iavailreceived' => 'required|string|max:255',
            'Idatereceived' => 'required|date ',
            'Ivolumepax' => 'required|integer',
            'Iremarks' => 'required|string|max:255',
            'IIAsource' => 'required|string|max:255',
            'IIAavailreceived' => 'required|string|max:255',
            'IIAdatereceived' => 'required|date ',
            'IIAvolumepax' => 'required|integer',
            'IIAremarks' => 'required|string|max:255',
            'IIBsource' => 'required|string|max:255',
            'IIBavailreceived' => 'required|string|max:255',
            'IIBdatereceived' => 'required|date ',
            'IIBvolumepax' => 'required|string|max:255',
            'IIBremarks' => 'required|string|max:255',
            'IIIAsource' => 'required|string|max:255',
            'IIIAavailreceived' => 'required|string|max:255',
            'IIIAdatereceived' => 'required|date',
            'IIIAvolumepax' => 'required|string|max:255',
            'IIIAremarks' => 'required|string|max:255',
            'IIIBsource' => 'required|string|max:255',
            'IIIBavailreceived' => 'required|string|max:255',
            'IIIBdatereceived' => 'required|date',
            'IIIBvolumepax' => 'required|integer',
            'IIIBremarks' => 'required|string|max:255',
            'IIICsource' => 'required|string|max:255',
            'IIICavailreceived' => 'required|string|max:255',
            'IIICdatereceived' => 'required|date',
            'IIICvolumepax' => 'required|integer',
            'IIICremarks' => 'required|string|max:255',
            'IIIDsource' => 'required|string|max:255',
            'IIIDavailreceived' => 'required|string|max:255',
            'IIIDdatereceived' => 'required|date ',
            'IIIDvolumepax' => 'required|integer',
            'IIIDremarks' => 'required|string|max:255',
            'IIIEsource' => 'required|string|max:255',
            'IIIEavailreceived' => 'required|string|max:255',
            'IIIEdatereceived' => 'required|date ',
            'IIIEvolumepax' => 'required|integer',
            'IIIEremarks' => 'required|string|max:255',
            'IIIFsource' => 'required|string|max:255',
            'IIIFavailreceived' => 'required|string|max:255',
            'IIIFdatereceived' => 'required|date ',
            'IIIFvolumepax' => 'required|integer ',
            'IIIFremarks' => 'required|string|max:255',
            'IVAsource' => 'required|string|max:255',
            'IVAavailreceived' => 'required|string|max:255',
            'IVAdatereceived' => 'required|date ',
            'IVAvolumepax' => 'required|integer',
            'IVAremarks' => 'required|string|max:255',
            'VAsource' => 'required|string|max:255',
            'VAavailreceived' => 'required|string|max:255',
            'VAdatereceived' => 'required|date ',
            'VAvolumepax' => 'required|integer ',
            'VAremarks' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'dateCreated' => 'required|date ',
            'dateUpdates' => 'required|date ',
            'barangay_id' => 'required|integer',
            'municipal_id' => 'required|integer',
            'province_id' => 'required|integer',
            'region_id' => 'required|integer',
    
        ]; 

        $validator = Validator::make($request->all() , $rules);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }else {
            $lguprofile = LguProfile::find($id);


            $lguprofile->update([
                'dateMonitoring'=> $request->dateMonitoring,
                'periodCovereda' => $request->periodCovereda,
                'periodCoveredb' => $request->periodCoveredb,
                'totalPopulation' => $request->totalPopulation,
                'householdWater' => $request->householdWater, 
                'householdToilets' => $request->householdToilets, 
                'dayCareCenter' => $request->dayCareCenter, 
                'elementary' => $request->elementary, 
                'secondarySchool' => $request->secondarySchool, 
                'healthStations' => $request->healthStations, 
                'retailOutlets' => $request->retailOutlets, 
                'bakeries' => $request->bakeries, 
                'markets' => $request->markets, 
                'transportTerminals' => $request->transportTerminals, 
                'breastfeeding' => $request->breastfeeding, 
                'hazards' => $request->hazards, 
                'affectedLGU' => $request->affectedLGU, 
                'noHousehold' => $request->noHousehold, 
                'noPuroks' => $request->noPuroks, 
                'populationA' => $request->populationA,   
                'populationB' => $request->populationB,   
                'populationC' => $request->populationC,   
                'populationD' => $request->populationD,   
                'populationE' => $request->populationE,   
                'populationF' => $request->populationF,
                'actualA' => $request->actualA,  
                'actualB' => $request->actualB,   
                'actualC' => $request->actualC,   
                'actualD' => $request->actualD,   
                'actualE' => $request->actualE,   
                'actualF' => $request->actualF,  

                // overweight (%) overweight
                'psnormalAAA' => $request->psnormalAAA, 
                'psunderweightAAA' => $request->psunderweightAAA, 
                'pssevereUnderweightAAA' => $request->pssevereUnderweightAAA, 
                'psoverweightAAA' => $request->psoverweightAAA, 

                'psnormalBAA' => $request->psnormalBAA, 
                'psunderweightBAA' => $request->psunderweightBAA, 
                'pssevereUnderweightBAA' => $request->pssevereUnderweightBAA, 
                'psoverweightBAA' => $request->psoverweightBAA, 

                'psnormalCAA' => $request->psnormalCAA, 
                'psunderweightCAA' => $request->psunderweightCAA,
                'pssevereUnderweightCAA' => $request->pssevereUnderweightCAA, 
                'psoverweightCAA' => $request->psoverweightCAA, 

                // overweight (%) obese
                'psnormalABA' => $request->psnormalABA, 
                'pswastedABA' => $request->pswastedABA, 
                'psseverelyWastedABA' => $request->psseverelyWastedABA, 
                'psoverweightABA' => $request->psoverweightABA, 
                'psobeseABA' => $request->psobeseABA, 

                'psnormalBBA' => $request->psnormalBBA, 
                'pswastedBBA' => $request->pswastedBBA, 
                'psseverelyWastedBBA' => $request->psseverelyWastedBBA, 
                'psoverweightBBA' => $request->psoverweightBBA, 
                'psobeseBBA' => $request->psobeseBBA, 

                'psnormalCCA' => $request->psnormalCCA, 
                'pswastedCCA' => $request->pswastedCCA, 
                'psseverelyWastedCCA' => $request->psseverelyWastedCCA, 
                'psoverweightCCA' => $request->psoverweightCCA, 
                'psobeseCCA' => $request->psobeseCCA, 

                // overweight (%) tall
                'psnormalAAB' => $request->psnormalAAB, 
                'psstuntedAAB' => $request->psstuntedAAB, 
                'pssevereStuntedAAB' => $request->pssevereStuntedAAB, 
                'pstallAAB' => $request->pstallAAB, 

                'psnormalBBB' => $request->psnormalBBB, 
                'psstuntedBBB' => $request->psstuntedBBB, 
                'pssevereStuntedBBB' => $request->pssevereStuntedBBB, 
                'pstallBBB' => $request->pstallBBB, 

                'psnormalCCC' => $request->psnormalCCC, 
                'psstuntedCCC' => $request->psstuntedCCC, 
                'pssevereStuntedCCC' => $request->pssevereStuntedCCC, 
                'pstallCCC' => $request->pstallCCC, 

                // overweight (%) obese School Children
                'scnormalABA' => $request->scnormalABA, 
                'scwastedABA' => $request->scwastedABA, 
                'scseverelyWastedABA' => $request->scseverelyWastedABA, 
                'scoverweightABA' => $request->scoverweightABA, 
                'scobeseABA' => $request->scobeseABA, 

                'scnormalBBA' => $request->scnormalBBA, 
                'scwastedBBA' => $request->scwastedABA, 
                'scseverelyWastedBBA' => $request->scseverelyWastedBBA, 
                'scoverweightBBA' => $request->scoverweightBBA, 
                'scobeseBBA' => $request->scobeseBBA, 

                'scnormalCCA' => $request->scnormalCCA, 
                'scwastedCCA' => $request->scwastedCCA, 
                'scseverelyWastedCCA' => $request->scseverelyWastedCCA, 
                'scoverweightCCA' => $request->scoverweightCCA, 
                'scobeseCCA' => $request->scobeseCCA,  

                // overweight (%) obese Pregnant Woman
                'pwnormalAAA' => $request->pwnormalAAA, 
                'pwnutritionllyatriskAAA' => $request->pwnutritionllyatriskAAA, 
                'pwoverweightAAA' => $request->pwoverweightAAA, 
                'pwobeseAAA' => $request->pwobeseAAA, 

                'pwnormalBAA' => $request->pwnormalBAA, 
                'pwnutritionllyatriskBAA' => $request->pwnutritionllyatriskBAA, 
                'pwoverweightBAA' => $request->pwoverweightBAA, 
                'pwobeseBAA' => $request->pwobeseBAA, 

                'pwnormalCAA' => $request->pwnormalCAA, 
                'pwnutritionllyatriskCAA' => $request->pwnutritionllyatriskCAA, 
                'pwoverweightCAA' => $request->pwoverweightCAA, 
                'pwobeseCAA' => $request->pwobeseCAA, 

                'landAreaResidential' => $request->landAreaResidential, 
                'remarksResidential' => $request->remarksResidential, 

                'landAreaCommercial' => $request->landAreaCommercial, 
                'remarksCommercial' => $request->remarksCommercial, 

                'landAreaIndustrial' => $request->landAreaIndustrial, 
                'remarksIndustrial' => $request->remarksIndustrial, 

                'landAreaAgricultural' => $request->landAreaAgricultural, 
                'remarksAgricultural' => $request->remarksAgricultural, 

                'landAreaFLMLNP' => $request->landAreaFLMLNP, 
                'remarksFLMLNP' => $request->remarksFLMLNP, 

                'Isource' => $request->Isource, 
                'Iavailreceived' => $request->Iavailreceived, 
                'Idatereceived' => $request->Idatereceived, 
                'Ivolumepax' => $request->Ivolumepax, 
                'Iremarks' => $request->Iremarks, 

                'IIAsource' => $request->IIAsource, 
                'IIAavailreceived' => $request->IIAavailreceived, 
                'IIAdatereceived' => $request->IIAdatereceived, 
                'IIAvolumepax' => $request->IIAvolumepax, 
                'IIAremarks' => $request->IIAremarks, 

                'IIBsource' => $request->IIBsource, 
                'IIBavailreceived' => $request->IIBavailreceived, 
                'IIBdatereceived' => $request->IIBdatereceived, 
                'IIBvolumepax' => $request->IIBvolumepax, 
                'IIBremarks' => $request->IIBremarks, 

                'IIIAsource' => $request->IIIAsource, 
                'IIIAavailreceived' => $request->IIIAavailreceived, 
                'IIIAdatereceived' => $request->IIIAdatereceived, 
                'IIIAvolumepax' => $request->IIIAvolumepax, 
                'IIIAremarks' => $request->IIIAremarks, 

                'IIIBsource' => $request->IIIBsource, 
                'IIIBavailreceived' => $request->IIIBavailreceived, 
                'IIIBdatereceived' => $request->IIIBdatereceived, 
                'IIIBvolumepax' => $request->IIIBvolumepax, 
                'IIIBremarks' => $request->IIIBremarks, 

                'IIICsource' => $request->IIICsource, 
                'IIICavailreceived' => $request->IIICavailreceived, 
                'IIICdatereceived' => $request->IIICdatereceived, 
                'IIICvolumepax' => $request->IIICvolumepax, 
                'IIICremarks' => $request->IIICremarks, 

                'IIIDsource' => $request->IIIDsource, 
                'IIIDavailreceived' => $request->IIIDavailreceived, 
                'IIIDdatereceived' => $request->IIIDdatereceived, 
                'IIIDvolumepax' => $request->IIIDvolumepax, 
                'IIIDremarks' => $request->IIIDremarks, 

                'IIIEsource' => $request->IIIEsource, 
                'IIIEavailreceived' => $request->IIIEavailreceived, 
                'IIIEdatereceived' => $request->IIIEdatereceived, 
                'IIIEvolumepax' => $request->IIIEvolumepax, 
                'IIIEremarks' => $request->IIIEremarks, 

                'IIIFsource' => $request->IIIFsource, 
                'IIIFavailreceived' => $request->IIIFavailreceived, 
                'IIIFdatereceived' => $request->IIIFdatereceived, 
                'IIIFvolumepax' => $request->IIIFvolumepax, 
                'IIIFremarks' => $request->IIIFremarks, 

                'IVAsource' => $request->IVAsource, 
                'IVAavailreceived' => $request->IVAavailreceived, 
                'IVAdatereceived' => $request->IVAdatereceived, 
                'IVAvolumepax' => $request->IVAvolumepax, 
                'IVAremarks' => $request->IVAremarks, 

                'VAsource' => $request->VAsource, 
                'VAavailreceived' => $request->VAavailreceived, 
                'VAdatereceived' => $request->VAdatereceived, 
                'VAvolumepax' => $request->VAvolumepax, 
                'VAremarks' => $request->VAremarks, 

                'status' => $request->status, 
                'dateCreated' => $request->dateCreated, 
                'dateUpdates' => $request->dateUpdates, 

                'barangay_id' =>$request->barangay_id,
                'municipal_id' => $request->municipal_id, 
                'province_id' => $request->province_id, 
                'region_id' => $request->region_id, 
            ]);
        }
        
        return redirect()->route('BSLGUprofile.index');
    }

    public function destroy(Request $request) {
        
        
        DB::table('barangaytracking')->where('lguprofilebarangay_id', $request->id)->delete();
        $lguprofile = LguProfile::find($request->id); 
        $lguprofile->delete();
       

        return redirect()->route('BSLGUprofile.index');
    }
}