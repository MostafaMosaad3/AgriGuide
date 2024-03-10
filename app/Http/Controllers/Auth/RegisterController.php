<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\EmailVerificationMail;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $credintionals = $request->validated();

        $user = User::create([
            'name' => $credintionals['name'],
            'email' => $credintionals['email'],
            'password' => bcrypt($credintionals['password'])
        ]);

        $token = $user->createToken('MyApp')->plainTextToken;


        $responce = [
            'user' => $user,
            'token'=>$token
        ];

        $code = rand(111111 , 999999) ;
        $user->update(['otp_code' => $code]);


        Mail::to($user->email)->Send(new EmailVerificationMail($code));
        return Response($responce, 201);
    }
}
