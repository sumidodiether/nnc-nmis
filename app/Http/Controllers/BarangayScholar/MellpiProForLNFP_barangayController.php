<?php

namespace App\Http\Controllers\BarangayScholar;

use App\Models\MellpiProForLNFP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\lnfp_form5a;
use App\Models\lnfp_form5a_rr;
use App\Models\sampleUpdateForm5a;

class MellpiProForLNFP_barangayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //LGU Profile (LNFP)
    public function index()
    {
        //
        return view('BarangayScholar/MellpiProForLNFP/LGUprofile.MellpiProForLNFPIndex');
    }
    public function mellpiProLNFP_create()
    {
        //
        return view('BarangayScholar/MellpiProForLNFP/LGUprofile.MellpiProForLNFPCreate');
    }


    //form 5 Monitoring
    public function monitoringForm5()
    {
        //
        return view('BarangayScholar/MellpiProForLNFP/MellpiProMonitoring.MonitoringForm5Index');
    }
    public function monitoringForm5create()
    {
        //
        $form5a = lnfp_form5a::get();

        return view('BarangayScholar/MellpiProForLNFP/MellpiProMonitoring.MonitoringForm5Create', ['form5a' => $form5a]);
    }
    public function editForm5a(Request $request) {
        $elementsA = $request->input('elementsA');
        $performanceA1 = $request->input('performanceA1');
        $performanceA2 = $request->input('performanceA2');
        $performanceA3 = $request->input('performanceA3');
        $performanceA4 = $request->input('performanceA4');
        $performanceA5 = $request->input('performanceA5');
        $docuSourceA = $request->input('docuSourceA');

        $elementsB = $request->input('elementsB');
        $performanceB1 = $request->input('performanceB1');
        $performanceB2 = $request->input('performanceB2');
        $performanceB3 = $request->input('performanceB3');
        $performanceB4 = $request->input('performanceB4');
        $performanceB5 = $request->input('performanceB5');
        $docuSourceB = $request->input('docuSourceB');

        $elementsBB = $request->input('elementsBB');
        $performanceBB1 = $request->input('performanceBB1');
        $performanceBB2 = $request->input('performanceBB2');
        $performanceBB3 = $request->input('performanceBB3');
        $performanceBB4 = $request->input('performanceBB4');
        $performanceBB5 = $request->input('performanceBB5');
        $docuSourceBB = $request->input('docuSourceBB');

        $elementsC = $request->input('elementsC');
        $performanceC1 = $request->input('performanceC1');
        $performanceC2 = $request->input('performanceC2');
        $performanceC3 = $request->input('performanceC3');
        $performanceC4 = $request->input('performanceC4');
        $performanceC5 = $request->input('performanceC5');
        $docuSourceC = $request->input('docuSourceC');

        $elementsD = $request->input('elementsD');
        $performanceD1 = $request->input('performanceD1');
        $performanceD2 = $request->input('performanceD2');
        $performanceD3 = $request->input('performanceD3');
        $performanceD4 = $request->input('performanceD4');
        $performanceD5 = $request->input('performanceD5');
        $docuSourceD = $request->input('docuSourceD');

        $elementsE = $request->input('elementsE');
        $performanceE1 = $request->input('performanceE1');
        $performanceE2 = $request->input('performanceE2');
        $performanceE3 = $request->input('performanceE3');
        $performanceE4 = $request->input('performanceE4');
        $performanceE5 = $request->input('performanceE5');
        $docuSourceE = $request->input('docuSourceE');

        $elementsF = $request->input('elementsF');
        $performanceF1 = $request->input('performanceF1');
        $performanceF2 = $request->input('performanceF2');
        $performanceF3 = $request->input('performanceF3');
        $performanceF4 = $request->input('performanceF4');
        $performanceF5 = $request->input('performanceF5');
        $docuSourceF = $request->input('docuSourceF');

        $elementsG = $request->input('elementsG');
        $performanceG1 = $request->input('performanceG1');
        $performanceG2 = $request->input('performanceG2');
        $performanceG3 = $request->input('performanceG3');
        $performanceG4 = $request->input('performanceG4');
        $performanceG5 = $request->input('performanceG5');
        $docuSourceG = $request->input('docuSourceG');

        $elementsGG = $request->input('elementsGG');
        $performanceGG1 = $request->input('performanceGG1');
        $performanceGG2 = $request->input('performanceGG2');
        $performanceGG3 = $request->input('performanceGG3');
        $performanceGG4 = $request->input('performanceGG4');
        $performanceGG5 = $request->input('performanceGG5');
        $docuSourceGG = $request->input('docuSourceGG');


        $elementsH = $request->input('elementsH');
        $performanceH1 = $request->input('performanceH1');
        $performanceH2 = $request->input('performanceH2');
        $performanceH3 = $request->input('performanceH3');
        $performanceH4 = $request->input('performanceH4');
        $performanceH5 = $request->input('performanceH5');
        $docuSourceH = $request->input('docuSourceH');

        $action = $request->input('action');


        if ($action == 'submit') {
            try {
                $submitForm5a_rr = new lnfp_form5a_rr;
    
                $submitForm5a_rr->forThePeriod = $request->input('forTheperiod');
                $submitForm5a_rr->nameofPnao = $request->input('nameOf');
                $submitForm5a_rr->address = $request->input('address');
                $submitForm5a_rr->provDeploy = $request->input('provDev');
                $submitForm5a_rr->numYearPnao = $request->input('numYr');
                $submitForm5a_rr->fulltime = $request->input('fulltime');
                $submitForm5a_rr->profAct = $request->input('profAct');
                $submitForm5a_rr->bdate = $request->input('bday');
                $submitForm5a_rr->sex = $request->input('sex');
                $submitForm5a_rr->dateDesignation = $request->input('dateDesig');
                $submitForm5a_rr->secondedOffice = $request->input('seconded');
                $submitForm5a_rr->devActnum1 = $request->input('num1');
                $submitForm5a_rr->devActnum2 = $request->input('num2');
                $submitForm5a_rr->devActnum3 = $request->input('num3');
                $submitForm5a_rr->ratingA = $request->input('ratingA');
                $submitForm5a_rr->ratingB = $request->input('ratingB');
                $submitForm5a_rr->ratingBB = $request->input('ratingBB');
                $submitForm5a_rr->ratingC = $request->input('ratingC');
                $submitForm5a_rr->ratingD = $request->input('ratingD');
                $submitForm5a_rr->ratingE = $request->input('ratingE');
                $submitForm5a_rr->ratingF = $request->input('ratingF');
                $submitForm5a_rr->ratingG = $request->input('ratingG');
                $submitForm5a_rr->ratingGG = $request->input('ratingGG');
                $submitForm5a_rr->ratingH = $request->input('ratingH');
                $submitForm5a_rr->remarksA = $request->input('remarksA');
                $submitForm5a_rr->remarksB = $request->input('remarksB');
                $submitForm5a_rr->remarksBB = $request->input('remarksBB');
                $submitForm5a_rr->remarksC = $request->input('remarksC');
                $submitForm5a_rr->remarksD = $request->input('remarksD');
                $submitForm5a_rr->remarksE = $request->input('remarksE');
                $submitForm5a_rr->remarksF = $request->input('remarksF');
                $submitForm5a_rr->remarksG = $request->input('remarksG');
                $submitForm5a_rr->remarksGG = $request->input('remarksGG');
                $submitForm5a_rr->remarksH = $request->input('remarksH');
    
                $submitForm5a_rr->save();
    
                return redirect()->back()->with('alert', 'Rate and Remarks Submitted Successfully!');
            } catch (\Throwable $th) {
                return "An error occured: " . $th->getMessage();
            }
        } elseif ($action == 'update') {
            $update = lnfp_form5a::where('id', 2)
            ->update([
                'elementsA' => $elementsA,
                'performanceA1' => $performanceA1,
                'performanceA2' => $performanceA2,
                'performanceA3' => $performanceA3,
                'performanceA4' => $performanceA4,
                'performanceA5' => $performanceA5,
                'documentSourceA' => $docuSourceA,

                'elementsB' => $elementsB,
                'performanceB1' => $performanceB1,
                'performanceB2' => $performanceB2,
                'performanceB3' => $performanceB3,
                'performanceB4' => $performanceB4,
                'performanceB5' => $performanceB5,
                'documentSourceB' => $docuSourceB,

                'elementsBB' => $elementsBB,
                'performanceBB1' => $performanceBB1,
                'performanceBB2' => $performanceBB2,
                'performanceBB3' => $performanceBB3,
                'performanceBB4' => $performanceBB4,
                'performanceBB5' => $performanceBB5,
                'documentSourceBB' => $docuSourceBB,

                'elementsC' => $elementsC,
                'performanceC1' => $performanceC1,
                'performanceC2' => $performanceC2,
                'performancec3' => $performanceC3,
                'performanceC4' => $performanceC4,
                'performanceC5' => $performanceC5,
                'documentSourceC' => $docuSourceC,

                'elementsD' => $elementsD,
                'performanceD1' => $performanceD1,
                'performanceD2' => $performanceD2,
                'performanceD3' => $performanceD3,
                'performanceD4' => $performanceD4,
                'performanceD5' => $performanceD5,
                'documentSourceD' => $docuSourceD,

                'elementsE' => $elementsE,
                'performanceE1' => $performanceE1,
                'performanceE2' => $performanceE2,
                'performanceE3' => $performanceE3,
                'performanceE4' => $performanceE4,
                'performanceE5' => $performanceE5,
                'documentSourceE' => $docuSourceE,

                'elementsF' => $elementsF,
                'performanceF1' => $performanceF1,
                'performanceF2' => $performanceF2,
                'performanceF3' => $performanceF3,
                'performanceF4' => $performanceF4,
                'performanceF5' => $performanceF5,
                'documentSourceF' => $docuSourceF,

                'elementsG' => $elementsG,
                'performanceG1' => $performanceG1,
                'performanceG2' => $performanceG2,
                'performanceG3' => $performanceG3,
                'performanceG4' => $performanceG4,
                'performanceG5' => $performanceG5,
                'documentSourceG' => $docuSourceG,

                'elementsGG' => $elementsGG,
                'performanceGG1' => $performanceGG1,
                'performanceGG2' => $performanceGG2,
                'performanceGG3' => $performanceGG3,
                'performanceGG4' => $performanceGG4,
                'performanceGG5' => $performanceGG5,
                'documentSourceGG' => $docuSourceGG,

                'elementsH' => $elementsH,
                'performanceH1' => $performanceH1,
                'performanceH2' => $performanceH2,
                'performanceH3' => $performanceH3,
                'performanceH4' => $performanceH4,
                'performanceH5' => $performanceH5,
                'documentSourceH' => $docuSourceH

            ]);

            return redirect()->back() ->with('alert', 'Updated Successfully!');

        }

        return response()->json(['message' => 'Invalid Action!', 400]);
    }

    public function storeForm5aRateremarks(Request $request) {
        try {
            $submitForm5a_rr = new lnfp_form5a_rr;

            $submitForm5a_rr->forThePeriod = $request->input('forTheperiod');
            $submitForm5a_rr->nameofPnao = $request->input('nameOf');
            $submitForm5a_rr->address = $request->input('address');
            $submitForm5a_rr->provDeploy = $request->input('provDev');
            $submitForm5a_rr->numYearPnao = $request->input('numYr');
            $submitForm5a_rr->fulltime = $request->input('fulltime');
            $submitForm5a_rr->profAct = $request->input('profAct');
            $submitForm5a_rr->bdate = $request->input('bday');
            $submitForm5a_rr->sex = $request->input('sex');
            $submitForm5a_rr->dateDesignation = $request->input('dateDesig');
            $submitForm5a_rr->secondedOffice = $request->input('seconded');
            $submitForm5a_rr->devActnum1 = $request->input('num1');
            $submitForm5a_rr->devActnum2 = $request->input('num2');
            $submitForm5a_rr->devActnum3 = $request->input('num3');
            $submitForm5a_rr->ratingA = $request->input('ratingA');
            $submitForm5a_rr->ratingB = $request->input('ratingB');
            $submitForm5a_rr->ratingBB = $request->input('ratingBB');
            $submitForm5a_rr->ratingC = $request->input('ratingC');
            $submitForm5a_rr->ratingD = $request->input('ratingD');
            $submitForm5a_rr->ratingE = $request->input('ratingE');
            $submitForm5a_rr->ratingF = $request->input('ratingF');
            $submitForm5a_rr->ratingG = $request->input('ratingG');
            $submitForm5a_rr->ratingGG = $request->input('ratingGG');
            $submitForm5a_rr->ratingH = $request->input('ratingH');
            $submitForm5a_rr->remarksA = $request->input('remarksA');
            $submitForm5a_rr->remarksB = $request->input('remarksB');
            $submitForm5a_rr->remarksBB = $request->input('remarksBB');
            $submitForm5a_rr->remarksC = $request->input('remarksC');
            $submitForm5a_rr->remarksD = $request->input('remarksD');
            $submitForm5a_rr->remarksE = $request->input('remarksE');
            $submitForm5a_rr->remarksF = $request->input('remarksF');
            $submitForm5a_rr->remarksG = $request->input('remarksG');
            $submitForm5a_rr->remarksGG = $request->input('remarksGG');
            $submitForm5a_rr->remarksH = $request->input('remarksH');

            $submitForm5a_rr->save();

            return redirect()->back()->with('alert', 'Rate and Remarks Submitted Successfully!');
        } catch (\Throwable $th) {
            return "An error occured: " . $th->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
        
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(MellpiProForLNFP $mellpiProForLNFP)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(MellpiProForLNFP $mellpiProForLNFP)
    // {
    //     //
    // }
    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, MellpiProForLNFP $mellpiProForLNFP)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(MellpiProForLNFP $mellpiProForLNFP)
    // {
    //     //
    // }
}
