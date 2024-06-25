<?php

namespace App\Http\Controllers\Disease;

use App\Http\Controllers\Controller;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{

    public function index()
    {
        $diseases = Disease::select('id' , 'name' , 'image' , 'description')->paginate(6);

        return response()->json($diseases);

    }
    public function search(Request $request)
    {
        $name = $request->input('name');

        $disease = Disease::where('name', 'like', '%' . $name . '%')->first();

        if (!$disease) {
            return response()->json(['message' => 'Disease not found'], 404);
        }

        return response()->json($disease);
    }


    public function show(Disease $disease)
    {
        if (! $disease) {
            return response()->json(['message' => 'Disease not found'], 404);
        }
        return response()->json(['disease'=>$disease]);
    }
}
