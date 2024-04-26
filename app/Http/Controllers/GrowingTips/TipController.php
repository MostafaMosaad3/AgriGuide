<?php

namespace App\Http\Controllers\GrowingTips;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;


class TipController extends Controller
{
    public function index(){
        $tips = Post::with([
            'user'=>function($query){$query->select('id', 'name');} ,
            'category'=>function($query){$query->select('id' , 'name') ;}])
            ->select('id' , 'title', 'image' , 'user_id', 'category_id')
            ->paginate(6);
        return response()->json(['tips'=>$tips]) ;
    }

    public function all_categories(){
        $categories = Category::pluck('name');
        return response()->json(['categories' => $categories]);
    }

    public function category($name){
        $category = Category::where('name' , 'like' , '%' .$name  . '%')->first() ;
        $tips = $category->posts;
        return response()->json(['category'=>$category->name ,'tips' => $tips]);
    }


    public function tip($id){
        $tip = Post::with(['user'=>function($query){
            $query->select('id' , 'name' , 'thumbnail');
        } ,'category'])->find($id) ;
        return response()->json(['tip'=>$tip]) ;
    }




}
