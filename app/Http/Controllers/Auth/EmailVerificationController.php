<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EmailVerificationRequest ;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    private $otp ;
    public function __construct()
    {
        $this->otp = new Otp() ;
    }


    public function SendEmailVerification(Request $request){
        $request->user()->notify(new EmailVerificationNotification());
        return response()->json('new email verification has been sent' , 200);
    }

    public function email_verification(EmailVerificationRequest $request){
        $otp2 = $this->otp->validate($request->email , $request->otp) ;

        if(!$otp2->status){
            return Response()->json(['error' , $otp2] , 401) ;
        }

        $user = User::where('email' , $request->email)->first() ;
        $user->update(['email_verified_at' => now()]);

        return response()->json('email verification has been sent' , 200) ;

    }


}
