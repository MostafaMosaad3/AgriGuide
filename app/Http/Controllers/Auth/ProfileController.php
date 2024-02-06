<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateProfileRequest;
use App\Models\User;


class ProfileController extends Controller
{
    public function show($id){
        $user = User::with(['questions' , 'posts'])->find($id);
        return response()->json(['profile' =>$user]);
    }

    public function update(UpdateProfileRequest $request , $id){
        $user = User::find($id);
        $attributes = $request->validated();
        if($request->hasFile('thumbnail')){
            $image_path = request()->file('thumbnail')->store('user');
            $attributes['thumbnail'] = url("storage/$image_path");
        }

        $user->update($attributes);
        return response()->json(['profile updated' ,'user'=>$user]);


    }
}
