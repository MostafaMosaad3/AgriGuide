<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function profile(Request $request){
        $user = $request->user();
        $user->load(['posts', 'questions']);

        return response()->json([
            'user' => $user
        ]);

    }

    public function update(UpdateProfileRequest $request){
        $user = Auth::user();
        $attributes = $request->validated();
        if($request->hasFile('thumbnail')){
            $image_path = request()->file('thumbnail')->store('user');
            $attributes['thumbnail'] = url("storage/$image_path");
        }

        $user->update($attributes);
        return response()->json(['profile updated' ,'user'=>$user]);


    }
}
