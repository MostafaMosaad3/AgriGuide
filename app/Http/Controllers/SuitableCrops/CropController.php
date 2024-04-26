<?php

namespace App\Http\Controllers\SuitableCrops;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use App\Models\Soil;
use Illuminate\Http\Request;

class CropController extends Controller
{
    public function index()
    {
        $crops = Crop::select('id' , 'name' , 'image' , 'Planting Method')->paginate(6);
        return response()->json(['crops'=>$crops]);
    }

    public function soils()
    {
        $soils = Soil::pluck('name');
        return response()->json($soils, 200);
    }

    public function soil($name){
        $soil = Soil::where('name' , 'like' , '%' . $name . '%' )->first() ;
        $crops = $soil->crops;
        return response()->json($crops, 200);
    }


    public function show($id)
    {
        $crop = Crop::with(['diseases'=>function($query){
            $query->Select( 'crop_id' , 'disease_id' , 'name' , 'image');}
        ])->find($id);

        if (!$crop) {
            return response()->json(['message' => 'Crop not found'], 404);
        }

        return response()->json(['crop'=>$crop]);
    }


    public function search(Request $request)
    {
        $name = $request->input('name') ;
        $crop = Crop::where('name', 'like', '%' . $name . '%')->first();

        if (!$crop) {
            return response()->json(['message' => 'Crop not found'], 404);
        }

        return response()->json($crop);

    }






}
