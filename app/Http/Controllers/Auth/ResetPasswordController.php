<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Models\User;
use Ichtrojan\Otp\Otp;
use Illuminate\Support\Facades\Hash ;

class ResetPasswordController extends Controller
{
    private $otp ;

    public function __construct(){
        $this->otp = new Otp();
    }

    public function reset_password(ResetPasswordRequest $request){
        $otp2 = $this->otp->validate($request->email , $request->otp) ;
        if(!$otp2){
            return response()->json(['error' =>$otp2] , 401) ;
        }

        $user =User::where('email' , $request->email)->first() ;
        $user->update(['password' =>Hash::make($request->password)]);
        $user->tokens()->delete();

        return response()->json('password resetted successfully' , 200);

    }
}
