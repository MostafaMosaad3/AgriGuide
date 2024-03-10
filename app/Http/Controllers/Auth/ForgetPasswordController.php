<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgetPasswordRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerificationMail;
use App\Models\User;


class ForgetPasswordController extends Controller
{
    public function forget_password(ForgetPasswordRequest $request){
        $request->validated();
        $user = User::where('email', $request->email)->first();
        $code = rand(111111,999999);
        $user->update(['otp_code' => $code]);

        Mail::to($request->email)->send(new EmailVerificationMail($code));

        // Return a response
        return response()->json(['message' => 'Verification code sent to your email.'], 200);
    }
}
