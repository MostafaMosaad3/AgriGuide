<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function blogs()
    {
        $blogs = Post::take(3)->get();
        return response()->json(['blogs'=>$blogs] , 200) ;
    }


    public function search(Request $request)
    {
        $name = $request->input('name');

        $blog = Post::where('title', 'like', '%' . $name . '%')->get();

        if (!$blog) {
            return response()->json(['message' => 'Disease not found'], 404);
        }

        return response()->json($blog);
    }
}
