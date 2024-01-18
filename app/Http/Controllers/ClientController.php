<?php

namespace App\Http\Controllers;

use App\Microservices\Client as ClientMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function list()
    {
        try {
            $business = Auth::user()->id;
            return response()->json(['status' => 200, 'clients' => ClientMS::list($business)]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, $e->getMessage()]);
        }
    }

    public function store(Request $request) 
    {
        try {
            return response()->json(['status' => 200, 'clients' => ClientMS::store($request)]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, $e->getMessage()]);
        }
    }
}
