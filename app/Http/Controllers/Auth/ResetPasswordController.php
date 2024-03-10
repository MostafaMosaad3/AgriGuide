<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function reset_password(ResetPasswordRequest $request)
    {
        // Validate incoming request
        $request->validated();

        // Find the user by ID
        $user = User::find($request->user_id);

        // Update user's password
        $user->password = Hash::make($request->password);
        $user->save();

        // Return a success response or perform additional actions as needed
        return response()->json(['message' => 'Password updated successfully.'], 200);
    }
}
