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
use App\Models\City;
use App\Models\Barangay;
use App\Models\Barangay as ModelsBarangay;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

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
 
        $ExistingPSGCData = PSGC::all(); 
        $ExistingRegionData = Region::all(); 
        $ExistingProvinceData = Province::all(); 
        $ExistingMunicipalData = Municipal::all(); 

        foreach($csv as $record){     
       
            $ExistingDatahold =  $ExistingPSGCData->where('psgccode', $record['Code'])->first();

            //dd( $ExistingDatahold);
            // $CodeRegions = [
         
            //    '01' => [
                   
            //         'name'=> 'Region I (Ilocos Region)'
            //    ],
            //    '02' => [
            //         'name'=> 'Region II (Cagayan Valley)'
            //    ],
            //    '03' =>  [ 
            //         'name'=> 'Region III (Central Luzon)'
            //    ],
            //    '04' => [ 
            //         'name'=> 'Region IV-A (CALABARZON)'
            //    ],
            //    '05' =>  [ 
            //         'name'=> 'Region V (Bicol Region)'
            //    ],
            //    '06' =>  [ 
            //         'name'=> 'Region VI (Western Visayas)'
            //    ],
            //    '07' =>   [ 
            //         'name'=> 'Region VII (Central Visayas)'
            //    ],
            //    '08' =>  [ 
            //         'name'=> 'Region VIII (Eastern Visayas)'
            //    ],
            //    '09' => [ 
            //         'name'=> 'Region IX (Zamboanga Peninsula)'
            //    ],
            //    '10' =>  [ 
            //         'name'=> 'Region X (Northern Mindanao)'
            //    ],
            //    '11' => [ 
            //         'name'=> 'Region XI (Davao Region)'
            //    ],
            //    '12' => [ 
            //         'name'=> 'Region XII (SOCCSKSARGEN)'
            //    ],
            //    '13' => [
            //     'name'=> 'National Capital Region (NCR)'
            //    ],
            //    '14' => [
            //             'name'=> 'Cordillera Administrative Region (CAR)'
            //     ],
            //    '16' => [ 
            //         'name'=> 'Region XIII (Caraga)'
            //    ],
            //    '17' => [ 
            //     'name'=> 'MIMAROPA Region'
            //     ],
            //    '19' =>  [ 
            //      'name'=> 'Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)'
            //    ],
            // ];


            // $CodeProvince = [
            //  '1400100000' => [
            //     'name' => 'Abra'
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Ifugao 	1402700000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet'
            //     Kalinga 	1403200000 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet'
            //     Mountain Province 	1404400000 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Apayao 	1408100000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Ilocos Norte 	0102800000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Ilocos Sur 	0102900000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     La Union 	0103300000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Pangasinan 	0105500000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Batanes 	0200900000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Cagayan 	0201500000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Isabela 	0203100000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Nueva Vizcaya 	0205000000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Quirino 	0205700000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Bataan 	0300800000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Bulacan 	0301400000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Nueva Ecija 	0304900000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Pampanga 	0305400000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Tarlac 	0306900000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Zambales 	0307100000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Aurora 	0307700000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Batangas 	0401000000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Cavite 	0402100000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Laguna 	0403400000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Quezon 	0405600000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Rizal 	0405800000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Marinduque 	1704000000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Occidental Mindoro 	1705100000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Oriental Mindoro 	1705200000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Palawan 	1705300000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //     Romblon 	1705900000
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],
            //  '1401100000' => [
            //     'name' => 'Benguet' 
            //  ],

            // ];


            // $CodeMun = [
            //    [
            //         'code'=> '13',
            //         'name'=> 'National Capital Region (NCR)',

            //    ],
            //    [
            //         'code'=> '14',
            //         'name'=> 'Cordillera Administrative Region (CAR)'
            //    ],
            //    [
            //         'code'=> '01',
            //         'name'=> 'Region I (Ilocos Region)'
            //    ],
            //    [
            //         'code'=> '02',
            //         'name'=> 'Region II (Cagayan Valley)'
            //    ],
            //    [
            //         'code'=> '03',
            //         'name'=> 'Region III (Central Luzon)'
            //    ],
            //    [
            //         'code'=> '04',
            //         'name'=> 'Region IV-A (CALABARZON)'
            //    ],
            //    [
            //         'code'=> '17',
            //         'name'=> 'MIMAROPA Region'
            //    ],
            //    [
            //         'code'=> '05',
            //         'name'=> 'Region V (Bicol Region)'
            //    ],
            //    [
            //         'code'=> '06',
            //         'name'=> 'Region VI (Western Visayas)'
            //    ],
            //    [
            //         'code'=> '07',
            //         'name'=> 'Region VII (Central Visayas)'
            //    ],
            //    [
            //         'code'=> '08',
            //         'name'=> 'Region VIII (Eastern Visayas)'
            //    ],
            //    [
            //         'code'=> '09',
            //         'name'=> 'Region IX (Zamboanga Peninsula)'
            //    ],
            //    [
            //         'code'=> '10',
            //         'name'=> 'Region X (Northern Mindanao)'
            //    ],
            //    [
            //         'code'=> '11',
            //         'name'=> 'Region XI (Davao Region)'
            //    ],
            //    [
            //         'code'=> '12',
            //         'name'=> 'Region XII (SOCCSKSARGEN)'
            //    ],
            //    [
            //         'code'=> '16',
            //         'name'=> 'Region XIII (Caraga)'
            //    ],
            //    [
            //         'code'=> '19',
            //         'name'=> 'Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)'
            //    ],

            // ];


            // parse from fetch data

            // parse from bulk Data
            $regionsubtr = substr($record['Code'], 0, 2);
            $provsubtr = substr($record['Code'], 2, 4);
            $munsubtr = substr($record['Code'], 5, 6);
            

            
            //dd($regionsubtr, '&', $ddds);
            // dd($provsubtr);

            // if($CodeRegions[$regionsubtr]){
               
            //     $d = $CodeRegions[$regionsubtr]["name"];
            //     dd($d);
            // }else {
            //         echo 'incremented by 1 ';
            // }
        


            // substr

          if($ExistingDatahold) {
                continue;
          }else {
                
  

                if ($record['Geographic_Level'] === 'Bgy'){
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
                    //  loop++;
                    // continue;
                }


           }


        //    $count++;
        }
        
        // Test limit to 2000 data rows
        if($count >= 20000){
            dd($count, ' records imported!');
        }

        //return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        return redirect('/mellpi_pro_LGU')->withStatus(__('LGU Profile successfully added.'));
    }

    public function Regionupload(Request $request){ 
        $request->validate([
            'inputcsvfileRegion' => 'required|mimes:csv,txt'
        ]);
        $csv = Reader::createFromPath($request->file('inputcsvfileRegion')->getRealPath());
        $csv->setHeaderOffset(0);
        
        // checker
        //dd($request->file('inputcsvfileRegion'));
        // dd($request->file('inputcsvfile')->getRealPath());
        $count = 0;
 
        $ExistingPSGCData = PSGC::all(); 
        $ExistingRegionData = Region::all(); 

        foreach($csv as $record){     
       
            $ExistingDatahold =  $ExistingPSGCData->where('psgccode', $record['Code'])->first();

            // parse two digits
            $regionsubtr = substr($record['Code'], 0, 2);
            //dd($regionsubtr);

          if($ExistingDatahold) {
                continue;
          }else {
        
                    $PSGCdata = PSGC::create([
                        'psgccode' => $record['Code'],
                        'correspondencecode' =>  '0',
                        'geolevel' =>  '0',
                        'oldname' =>  '0',
                        'incomeclass' =>  '0',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

                    $Regiondata = Region::create([
                        'psgccode_id' => $PSGCdata->id,
                        'region' => $record['Name'],
                        'regclass' => '0',
                        'regnumber' =>  '0',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

           }

        }
        
 
        //return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        return redirect('/mellpi_pro_LGU')->withStatus(__('LGU Profile successfully added.'));
    }

    public function Provinceupload(Request $request){ 
        $request->validate([
            'inputcsvfileProvince' => 'required|mimes:csv,txt'
        ]);
        $csv = Reader::createFromPath($request->file('inputcsvfileProvince')->getRealPath());
        $csv->setHeaderOffset(0);
        
        // checker
        //dd($request->file('inputcsvfileProvince'));
        // dd($request->file('inputcsvfile')->getRealPath());
        $count = 0;
        foreach($csv as $record){     
            
            // parse raw data  psgc  
           $regionsubtr = substr($record['Code'], 0, 2);
           //dd($regionsubtr);

            // query get match psgc database
            $datamatchRegions = DB::table('psgcs')
                                    ->join('regions', 'psgcs.id' ,'=' , 'regions.psgccode_id')
                                    ->select('regions.psgccode_id' ,'regions.id as regionid' , 'psgccode', 'region as regionname')
                                    // ->select('psgccode')
                                    ->where('psgccode','LIKE', $regionsubtr . '%')
                                    ->first();



          

            $provinceQueryExist = DB::table('psgcs')->where('psgccode', $record['Code'])->first();
            //dd($datamatchRegions->regionid,$regionsubtr,$record['Code'], $provinceQueryExist); 
            
            if($provinceQueryExist){
                echo 'Data found!';
            }else {
                echo 'Data does not exists!'; 
                PSGC::create([
                    'psgccode' => $record['Code'],
                    'correspondencecode' =>  '0',
                    'geolevel' =>  '0',
                    'oldname' =>  '0',
                    'incomeclass' =>  '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Province::create([
                    'region_id' => $datamatchRegions->regionid,
                    'province' =>  $record['Name'],
                    'proclass' =>  '0',
                    'provnumber' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
        
 
        //return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        return redirect('/mellpi_pro_LGU')->withStatus(__('LGU Profile successfully added.'));
    }

    public function Cityupload(Request $request){ 
        $request->validate([
            'inputcsvfileCity' => 'required|mimes:csv,txt'
        ]);
        $csv = Reader::createFromPath($request->file('inputcsvfileCity')->getRealPath());
        $csv->setHeaderOffset(0);
        
         // checker
        //dd($request->file('inputcsvfileProvince'));
        // dd($request->file('inputcsvfile')->getRealPath());
        $count = 0;
        foreach($csv as $record){     
            
            // parse raw data  psgc  
           $regionsubtr = substr($record['Code'], 0, 2);
           //dd($regionsubtr);

            // query get match psgc database
            $datamatchRegions = DB::table('psgcs')
                                    ->join('regions', 'psgcs.id' ,'=' , 'regions.psgccode_id')
                                    ->select('regions.psgccode_id' ,'regions.id as regionid' , 'psgccode', 'region as regionname')
                                    // ->select('psgccode')
                                    ->where('psgccode','LIKE', $regionsubtr . '%')
                                    ->first();



          

            $provinceQueryExist = DB::table('psgcs')->where('psgccode', $record['Code'])->first();
            //dd($datamatchRegions->regionid,$regionsubtr,$record['Code'], $provinceQueryExist); 
            
            if($provinceQueryExist){
                echo 'Data found!';
            }else {
                echo 'Data does not exists!'; 
                PSGC::create([
                    'psgccode' => $record['Code'],
                    'correspondencecode' =>  '0',
                    'geolevel' =>  '0',
                    'oldname' =>  '0',
                    'incomeclass' =>  '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                City::create([
                    'region_id' => $datamatchRegions->regionid,
                    'city' =>  $record['Name'],
                    'cityclass' =>  '0',
                    'citynumber' => '0',
                    'cityIncomeClass' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
        
 
        //return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        return redirect('/mellpi_pro_LGU')->withStatus(__('LGU Profile successfully added.'));
    }
    public function Munupload(Request $request){ 
        $request->validate([
            'inputcsvfileMun' => 'required|mimes:csv,txt'
        ]);
        $csv = Reader::createFromPath($request->file('inputcsvfileMun')->getRealPath());
        $csv->setHeaderOffset(0);
        
        // checker
        //dd($request->file('inputcsvfileMun'));
        // dd($request->file('inputcsvfile')->getRealPath());
        $count = 0;
  
        foreach($csv as $record){   

            // parse raw data  psgc  
            $provincensubtr = substr($record['Code'], 0, 2); 
            //dd($regionsubtr);

            // query get match psgc database
            $datamatchRegions = DB::table('psgcs')
                  ->join('regions', 'psgcs.id' ,'=' , 'regions.psgccode_id')
                  ->join('provinces' ,'regions.id' , '=', 'provinces.region_id')
                  ->select('regions.psgccode_id' ,'provinces.id as provinceid' , 'psgccode',)
                  // ->select('psgccode')
                  ->where('psgccode','LIKE', $provincensubtr . '%')
                  ->first();
            

            $provinceQueryExist = DB::table('psgcs')->where('psgccode', $record['Code'])->first();
            dd($datamatchRegions->provinceid,$provincensubtr,$record['Code'], $provinceQueryExist); 
         

          if($provinceQueryExist) {
                continue;
          }else {
                echo 'Data does not exists!'; 
                PSGC::create([
                    'psgccode' => $record['Code'],
                    'correspondencecode' =>  '0',
                    'geolevel' =>  '0',
                    'oldname' =>  '0',
                    'incomeclass' =>  '0' ,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                City::create([
                        'province_id' => $datamatchRegions->provinceid,
                        'municipal' => $record['Name'],
                        'munclass' => '0' ,
                        'munnumber' => '0' ,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

           }

        }
        
 
        //return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        return redirect('/mellpi_pro_LGU')->withStatus(__('LGU Profile successfully added.'));
    }

    public function Barangayupload(Request $request){ 
        $request->validate([
            'inputcsvfileRegion' => 'required|mimes:csv,txt'
        ]);
        $csv = Reader::createFromPath($request->file('inputcsvfileRegion')->getRealPath());
        $csv->setHeaderOffset(0);
        
        // checker
        dd($request->file('inputcsvfileRegion'));
        // dd($request->file('inputcsvfile')->getRealPath());
        $count = 0;
 
        $ExistingPSGCData = PSGC::all(); 
        $ExistingRegionData = Region::all(); 

        foreach($csv as $record){     
       
            $ExistingDatahold =  $ExistingPSGCData->where('psgccode', $record['Code'])->first();

            // parse two digits
            $regionsubtr = substr($record['Code'], 0, 2);
            dd($regionsubtr);

          if($ExistingDatahold) {
                continue;
          }else {
        
                    $PSGCdata = PSGC::create([
                        'psgccode' => $record['Code'],
                        'correspondencecode' =>  '0',
                        'geolevel' =>  '0',
                        'oldname' =>  '0',
                        'incomeclass' =>  '0',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

                    $Regiondata = Region::create([
                        'psgccode_id' => $PSGCdata->id,
                        'region' => $record['Name'],
                        'regclass' => '0',
                        'regnumber' =>  '0',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

           }

        }
        
 
        //return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        return redirect('/mellpi_pro_LGU')->withStatus(__('LGU Profile successfully added.'));
    }


}