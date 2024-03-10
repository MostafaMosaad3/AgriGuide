<?php

namespace App\Http\Controllers\Soil;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use App\Models\Soil;
use Illuminate\Http\Request;

class SoilController extends Controller
{

    public function index()
    {
        $soils = Soil::select('name' , 'image' , 'Recommended_Water')->get();

        return response()->json($soils);

    }

    public function search(Request $request)
    {
        $name = $request->input('name');

        $soil = Soil::where('name', 'like', '%' . $name . '%')->first();

        if (!$soil) {
            return response()->json(['message' => 'Soil not found'], 404);
        }

        return response()->json($soil);
    }

    public function show($id)
    {
        $soil = Soil::with(['crops'=>function($query){
            $query->select('id' ,'soil_id' , 'name' , 'image' , 'Planting Method');
        }])->find($id) ;

        if (!$soil) {
            return response()->json(['message' => 'Soil not found'], 404);
        }
        return response()->json(['soil' => $soil]);
    }
}
