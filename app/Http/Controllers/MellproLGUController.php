<?php

namespace App\Http\Controllers;

use App\Models\Mellpro_LGU;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Mellpi;
use App\Models\PSGC;
use App\Models\Region;
use App\Models\Province;
use App\Models\Municipal;
use App\Models\Barangay;
use App\Models\Barangay as ModelsBarangay;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

// added namespacing
use League\Csv\Reader;

class MellproLGUController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mellpi_pro_lgu.mellpi_Pro_index');
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
    public function show(Mellpro_LGU $mellpro_LGU)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mellpro_LGU $mellpro_LGU)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mellpro_LGU $mellpro_LGU)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mellpro_LGU $mellpro_LGU)
    {
        //
    }

    public function upload(Request $request){ 
        $request->validate([
            'inputcsvfile' => 'required|mimes:csv,txt'
        ]);
        $csv = Reader::createFromPath($request->file('inputcsvfile')->getRealPath());
        $csv->setHeaderOffset(0);
        
        // checker
        //dd($request->file('inputcsvfile'));
        // dd($request->file('inputcsvfile')->getRealPath());
        $count = 0;
       
        
        foreach($csv as $record){
           // dd($record);
        
        // $PSGCdata = PSGC::create([
        //     'psgccode' => $record['Code'],
        //     'correspondencecode' => $record['Correspondence_Code'],
        //     'geolevel' => $record['Geographic_Level'],
        //     'oldname' => $record['Old_names'],
        //     'incomeclass' => $record['Income_classification'],
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // $Regiondata = Region::create([
        //             'psgccode_id' => $PSGCdata->id,
        //             'region' => $record['Name'],
        //             'regclass' => $record['Income_classification'],
        //             'regnumber' => $record['Number'],
        //             'created_at' => now(),
        //             'updated_at' => now(),
        //         ]);

         
            if ($record['Geographic_Level'] === 'Bgy'){
                //echo 'Barangay ', $count;
                //dd($record['Code'] );
                $PSGCdata = PSGC::create([
                    'psgccode' => $record['Code'],
                    'correspondencecode' => $record['Correspondence_Code'],
                    'geolevel' => $record['Geographic_Level'],
                    'oldname' => $record['Old_names'],
                    'incomeclass' =>  '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $Regiondata = Region::create([
                    'psgccode_id' => $PSGCdata->id,
                    'region' => $record['Name'],
                    'regclass' => '0',
                    'regnumber' =>  $record['Number'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $Provincedata = Province::create([
                    'region_id' => $Regiondata->id,
                    'province' => $record['Name'],
                    'proclass' =>  '0',
                    'provnumber' => $record['Number'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $Municipaldata = Municipal::create([
                    'province_id' => $Provincedata->id,
                    'municipal' => $record['Name'],
                    'munclass' => $record['Income_classification'],
                    'munnumber' => $record['Number'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $Barangaydata = Barangay::create([
                    'municipal_id' => $Municipaldata->id,
                    'barangay' => $record['Name'],
                    'brgytype' => $record['Type'],
                    'brgynumber' => $record['Number'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);


            }elseif($record['Geographic_Level'] === 'Mun'  || $record['Geographic_Level'] === 'City' ){
                //echo 'Municipal', $count;
                $PSGCdata = PSGC::create([
                    'psgccode' => $record['Code'],
                    'correspondencecode' => $record['Correspondence_Code'],
                    'geolevel' => $record['Geographic_Level'],
                    'oldname' => $record['Old_names'],
                    'incomeclass' =>  '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $Regiondata = Region::create([
                    'psgccode_id' => $PSGCdata->id,
                    'region' => $record['Name'],
                    'regclass' => '0',
                    'regnumber' =>  $record['Number'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $Provincedata = Province::create([
                    'region_id' => $Regiondata->id,
                    'province' => $record['Name'],
                    'proclass' =>  '0',
                    'provnumber' => $record['Number'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $Municipaldata = Municipal::create([
                    'province_id' => $Provincedata->id,
                    'municipal' => $record['Name'],
                    'munclass' => $record['Income_classification'],
                    'munnumber' => $record['Number'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);


            } 
            elseif($record['Geographic_Level'] === 'Prov'){ 
                $PSGCdata = PSGC::create([
                    'psgccode' => $record['Code'],
                    'correspondencecode' => $record['Correspondence_Code'],
                    'geolevel' => $record['Geographic_Level'],
                    'oldname' => $record['Old_names'],
                    'incomeclass' =>  '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $Regiondata = Region::create([
                    'psgccode_id' => $PSGCdata->id,
                    'region' => $record['Name'],
                    'regclass' => '0',
                    'regnumber' =>  $record['Number'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $Provincedata = Province::create([
                    'region_id' => $Regiondata->id,
                    'province' => $record['Name'],
                    'proclass' =>  $record['Income_classification'],
                    'provnumber' => $record['Number'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            elseif($record['Geographic_Level'] === 'Reg'){
                //echo 'Region', $count;
                $PSGCdata = PSGC::create([
                    'psgccode' => $record['Code'],
                    'correspondencecode' => $record['Correspondence_Code'],
                    'geolevel' => $record['Geographic_Level'],
                    'oldname' => $record['Old_names'],
                    'incomeclass' =>  '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $Regiondata = Region::create([
                    'psgccode_id' => $PSGCdata->id,
                    'region' => $record['Name'],
                    'regclass' => $record['Income_classification'],
                    'regnumber' =>  $record['Number'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
   
            }else {
                 echo "data is not found!";
            }
          }
        
          $count++;
            // // 10 digit coding structure
            // $holdData = $record['geoLevel'];
            // // parse code string 
            // $region = substr($holdData,0,1);
            // $province = substr($holdData,0,5);
            // $municipal = substr($holdData,0,7);
            // $brgy = substr($holdData,0,9);
            

         
          

            // using substr
            // if($record['Code'] == '1300000000'){
            //     echo "National Capital Region (NCR)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif($record['10-digit_PSGC'] ==  '1400000000'){
            //     echo "Cordillera Administrative Region (CAR)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif($record['10-digit_PSGC'] ==  '0100000000'){
            //     echo "Region I (Ilocos Region)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '0200000000'){
            //     echo "Region II (Cagayan Valley)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '0300000000'){
            //     echo "Region III (Central Luzon)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '0400000000'){
            //     echo "Region IV-A (CALABARZON)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '1700000000'){
            //     echo "MIMAROPA Region";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '0500000000'){
            //     echo "Region V (Bicol Region)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '0600000000'){
            //     echo "Region VI (Western Visayas)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '0700000000'){
            //     echo "Region VII (Central Visayas)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '0800000000'){
            //     echo "Region VIII (Eastern Visayas)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '0900000000'){
            //     echo "Region IX (Zamboanga Peninsula)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '1000000000'){
            //     echo "Region X (Northern Mindanao)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '1100000000'){
            //     echo "Region XI (Davao Region)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '1200000000'){
            //     echo "Region XII (SOCCSKSARGEN)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '1600000000'){
            //     echo "Region XIII (Caraga)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }elseif ($record['10-digit_PSGC'] ==  '1900000000'){
            //     echo "Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)";
            //     PSGC::create([
            //         'psgccode' => $record['10-digit_PSGC'],
            //         'correspondencecode' => $record['Correspondence_Code'],
            //         'geolevel' => '',
            //         'oldname' => '',
            //         'incomeclass' =>'',
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }else {
            //     echo "No data!";
            // }
    
        
        if($count >= 20000){
            dd($count, ' records imported!');
        }

        //return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        return redirect('/mellpi_pro_LGU')->withStatus(__('LGU Profile successfully added.'));
    }

}
