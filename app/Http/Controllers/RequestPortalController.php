<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Request_Portal;

class RequestPortalController extends Controller
{
    public function index()
    {
        return view('request_portal.requestPortal');
    }
}
