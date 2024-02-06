<?php

namespace App\Http\Controllers;


use App\Models\Soil ;
use Illuminate\Http\Request;

class datacontroller extends Controller
{
    public function soildata(Request $request){

        if($request->hasfile('image')){
            $image_path = $request->file('image')->store('soil') ;
            $request['image'] = url("storage/$image_path");
        }

        $soil = Soil::create(request()->all());
        return response()->json(['soil'=>$soil]);
    }
}
