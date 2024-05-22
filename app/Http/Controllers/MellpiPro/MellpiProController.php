<?php

namespace App\Http\Controllers\MellpiPro;

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
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
 

// added namespacing
use League\Csv\Reader;

use function PHPSTORM_META\map;

class MellpiProController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('mellpi_pro.create');
    }

    public function create()
    {


      
    }

    public function store()
    {

        
      
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
       
        //dd($csv->getHeader());
     
        try{
            foreach($csv as $record){
                if ($record['Geographic_Level'] === 'Brgy'){
    
                    $PSGCdata = PSGC::create([
                        'psgccode' => $record['10-digit_PSGC'],
                        'correspondencecode' => $record['Correspondence_Code'],
                        'geolevel' => $record['Geographic_Level'],
                        'oldname' => $record['Old_names'],
                        'incomeclass' => $record['Income_Classification'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    $Regiondata = Region::create([
                        'psgc_id' => $PSGCdata->id,
                        'region' => $record['Name'],
                        'regclass' => $record['Income_classification'],
                        'regnumber' => $record['number'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    $Provincedata = Province::create([
                        'region_id' => $Regiondata->id,
                        'province' => $record['province'],
                        'provclass' => $record['class'],
                        'provnumber' => $record['number'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    $Municipaldata = Municipal::create([
                        'province_id' => $Provincedata->id,
                        'municipal' => $record['municipal'],
                        'munclass' => $record['class'],
                        'munnumber' => $record['number'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    $Barangaydata = Barangay::create([
                        'municipal_id' => $Municipaldata->id,
                        'barangay' => $record['barangay'],
                        'brgytype' => $record['type'],
                        'brgynumber' => $record['number'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
    
                }elseif($record['Geographic_Level'] === 'Mun' || $record['Geographic_Level'] === 'City'){
         
                    $PSGCdata = PSGC::create([
                        'psgccode' => $record['10-digit_PSGC'],
                        'correspondencecode' => $record['Correspondence_Code'],
                        'geolevel' => $record['Geographic_Level'],
                        'oldname' => $record['Old_names'],
                        'incomeclass' => $record['Income_Classification'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    $Regiondata = Region::create([
                        'psgc_id' => $PSGCdata->id,
                        'region' => $record['region'],
                        'regclass' => $record['class'],
                        'regnumber' => $record['number'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    $Provincedata = Province::create([
                        'region_id' => $Regiondata->id,
                        'province' => $record['province'],
                        'provclass' => $record['class'],
                        'provnumber' => $record['number'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    $Municipaldata = Municipal::create([
                        'province_id' => $Provincedata->id,
                        'municipal' => $record['municipal'],
                        'munclass' => $record['class'],
                        'munnumber' => $record['number'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
    
    
                }
                elseif($record['Geographic_Level'] === 'Prov'){
                    $PSGCdata = PSGC::create([
                        'psgccode' => $record['10-digit_PSGC'],
                        'correspondencecode' => $record['Correspondence_Code'],
                        'geolevel' => $record['Geographic_Level'],
                        'oldname' => $record['Old_names'],
                        'incomeclass' => $record['Income_Classification'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    $Regiondata = Region::create([
                        'psgc_id' => $PSGCdata->id,
                        'region' => $record['region'],
                        'regclass' => $record['class'],
                        'regnumber' => $record['number'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    $Provincedata = Province::create([
                        'region_id' => $Regiondata->id,
                        'province' => $record['province'],
                        'provclass' => $record['class'],
                        'provnumber' => $record['number'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                }
                elseif($record['Geographic_Level'] === 'Reg'){
                    $PSGCdata = PSGC::create([
                        'psgccode' => $record['10-digit_PSGC'],
                        'correspondencecode' => $record['Correspondence_Code'],
                        'geolevel' => $record['Geographic_Level'],
                        'oldname' => $record['Old_names'],
                        'incomeclass' => $record['Income_Classification'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
    
                    $Regiondata = Region::create([
                        'psgc_id' => $PSGCdata->id,
                        'region' => $record['region'],
                        'regclass' => $record['class'],
                        'regnumber' => $record['number'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }else {
                     echo "data is not found!";
                }
    
                  
                // $count++;
                // // 10 digit coding structure
                // $holdData = $record['geoLevel'];
                // // parse code string 
                // $region = substr($holdData,0,1);
                // $province = substr($holdData,0,5);
                // $municipal = substr($holdData,0,7);
                // $brgy = substr($holdData,0,9);
                
    
             
              
    
                // using substr
                // if($record['10-digit_PSGC'] == '1300000000'){
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
            }
            
        }catch(Exception $errors){
            echo $errors;

        }


        if($count >= 20000){
            dd($count, ' records imported!');
        }

        //return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        return redirect('/mellpi_pro_LGU')->withStatus(__('LGU Profile successfully added.'));
    }
}