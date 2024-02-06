<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;


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

        $token = $user->createToken('myapptoken')->plainTextToken;

        $responce = [
            'user' => $user,
            'token' => $token
        ];

        $user->notify(new EmailVerificationNotification()) ;
        return Response($responce, 201);
    }
}
