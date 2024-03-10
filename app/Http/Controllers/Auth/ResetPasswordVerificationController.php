<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgetPasswordVerificationRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ResetPasswordVerificationController extends Controller
{
    public function forget_password_verification(ForgetPasswordVerificationRequest $request)
    {
        $request->validated();
        $user = User::where('otp_code', $request->otp)->first();
        $user->otp_code = null ;

        return response()->json([['user_id' => $user->id] , 'otp is correct' ] , 200);
    }
}
