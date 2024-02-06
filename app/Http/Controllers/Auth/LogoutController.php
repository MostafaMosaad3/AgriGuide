<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function logout(Request $request){
        auth()->user()->tokens()->delete() ;

        return [
            'message'=>'logged out'
        ];
    }
}
