<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EmailVerificationRequest ;
use App\Mail\EmailVerificationMail;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailVerificationController extends Controller
{
    private $otp ;
    public function __construct()
    {
        $this->otp = new Otp() ;
    }


    public function SendEmailVerification(Request $request){
        $user = Auth::user() ;
        $code = rand(111111 , 999999) ;

        $user->update(['otp_code' => $code]);
        $user->save();

        Mail::to($user->email)->Send(new EmailVerificationMail($code));
        return response()->json('new email verification has been sent' , 200);
    }

    public function email_verification(EmailVerificationRequest $request){
        $data = $request->validated() ;

        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Unauthorized.'], 401);
        }

        if ($request->otp === $user->otp_code){
            $user->update(['email_verified_at' => now()]);
            $user->save();

            return response()->json(['message' => 'OTP verified successfully.']);
        } else {
            return response()->json(['error' => 'Invalid OTP.'], 400);
        }


    }


}
