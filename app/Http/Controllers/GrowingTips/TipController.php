<?php

namespace App\Http\Controllers\GrowingTips;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;


class TipController extends Controller
{
    public function index(){
        $tips = Post::with('user' , 'category')->paginate(6);
        return response()->json(['tips'=>$tips]) ;
    }

    public function all_categories(){
        $categories = Category::pluck('name');
        return response()->json(['categories' => $categories]);
    }

    public function category($id){
        $category = Category::find($id);
        $tips = $category->posts;
        return response()->json(['category'=>$category->name ,'tips' => $tips]);
    }


    public function tip($id){
        $tip = Post::with('user' ,'category')->find($id) ;
        return response()->json(['tip'=>$tip]) ;
    }




}
