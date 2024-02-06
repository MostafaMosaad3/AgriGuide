<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\Auth\ForgetPasswordRequest;
use App\Models\User;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    public function forget_password(ForgetPasswordRequest $request){
        $input = $request->only('email') ;
        $user = User::where('email' , $input)->first() ;
        $user->notify(new ResetPasswordNotification()) ;
        return response()->json('otp has been sent' , 200) ;
    }
}
