<?php

namespace App\Microservices;

use App\Models\Client as ClientM;

class Client extends Microservice
{
    public static function list($business_id)
    {
        return ClientM::orderBy('created_at', 'desc')->where('business_id', $business_id)->get();
    }

    public static function store($request)
    {
        return $request;
        // return ClientM::create([
        //     'name' => 
        //     'last_name' => 
        //     'telephone' => 
        //     'image' => 
        //     'email' => 
        //     'curp' => 
        //     'rfc' => 
        //     'int' => 
        //     'ext' => 
        //     'status' => 
        //     'colony_id' => 
        //     'business_id' => 
        //     'user_id' => 
        // ]);
    }

}