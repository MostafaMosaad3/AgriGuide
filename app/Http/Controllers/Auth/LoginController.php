<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Notifications\LoginNotification;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password ))
        {
            return response([
                'message' => 'email or password is unvalid'],
                '401'
            );
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $responce = [
            'user' => $user,
            'token' => $token
        ];
        $user->notify(new LoginNotification()) ;
        return Response($responce, 201);
    }
}
