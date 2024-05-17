<?php

namespace App\Http\Controllers\MellpiPro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Mellpi;
use App\Models\PSGC;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

// added namespacing
use League\Csv\Reader;


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
 
    public function uploadPSGC(Request $request){ 
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
        foreach($csv as $record){
        //dd($record);
          PSGC::create([
                'psgccode' => $record['10-digit_PSGC'],
                'correspondencecode' => $record['Correspondence_Code'],
                'geolevel' => $record['Old_names'],
                'oldname' => $record['Geographic_Level'],
                'incomeclass' => $record['Income_Classification'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            $count++;
        }
        
        if($count >= 20000){
            dd($count, ' records imported!');
        }

        return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        //return redirect('/mellpi_pro')->withStatus(__('LGU Profile successfully added.'));
    }

    public function uploadRegion(Request $request){ 
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
        foreach($csv as $record){
        //dd($record);
          PSGC::create([
                'psgccode' => $record['10-digit_PSGC'],
                'correspondencecode' => $record['Correspondence_Code'],
                'geolevel' => $record['Old_names'],
                'oldname' => $record['Geographic_Level'],
                'incomeclass' => $record['Income_Classification'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            $count++;
        }
        
        if($count >= 20000){
            dd($count, ' records imported!');
        }

        return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        //return redirect('/mellpi_pro')->withStatus(__('LGU Profile successfully added.'));
    }

    public function uploadProvince(Request $request){ 
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
        foreach($csv as $record){
        //dd($record);
          PSGC::create([
                'psgccode' => $record['10-digit_PSGC'],
                'correspondencecode' => $record['Correspondence_Code'],
                'geolevel' => $record['Old_names'],
                'oldname' => $record['Geographic_Level'],
                'incomeclass' => $record['Income_Classification'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            $count++;
        }
        
        if($count >= 20000){
            dd($count, ' records imported!');
        }

        return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        //return redirect('/mellpi_pro')->withStatus(__('LGU Profile successfully added.'));
    }

    public function uploadMuni(Request $request){ 
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
        foreach($csv as $record){
        //dd($record);
          PSGC::create([
                'psgccode' => $record['10-digit_PSGC'],
                'correspondencecode' => $record['Correspondence_Code'],
                'geolevel' => $record['Old_names'],
                'oldname' => $record['Geographic_Level'],
                'incomeclass' => $record['Income_Classification'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            $count++;
        }
        
        if($count >= 20000){
            dd($count, ' records imported!');
        }

        return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        //return redirect('/mellpi_pro')->withStatus(__('LGU Profile successfully added.'));
    }

 
}