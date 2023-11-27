<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUser()
    {
        try {
            $user = User::where('id', Auth::user()->id)->first();
            return response()->json(['status' => 200, "user" => $user]);
        } catch (\Exception $e) {
            return response()->json(['status', 500, "data" => $e->getMessage()]);
        }
    }
}
