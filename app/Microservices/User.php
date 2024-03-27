<?php

namespace App\Microservices;

class User extends Microservice
{
    public static function login($request)
    {
        dd($request);    
    }
}