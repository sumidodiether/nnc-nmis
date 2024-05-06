<?php

namespace App\Http\Controllers\LguPerformance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Mellpi;

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
        Mellpi::create([
            'barangay' => request('barangay'),
            'municipality' => request('municipality'),
            'province' => request('province'),
        ]);

        return redirect('/mellpi_pro')->withStatus(__('LGU Profile successfully added.'));
    }




}