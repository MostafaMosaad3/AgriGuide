<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $posts = Post::with(['user' , 'category'])->paginate(6);
        return response()->json(['posts'=>$posts]);
    }


    public function create(PostRequest $request){
        $attributes = $request->validated();

        $attributes['user_id'] = Auth()->id() ;
        if($request->hasFile('image')){
            $image_path = request()->file('image')->store('post');
            $attributes['image'] = url("storage/$image_path");
        }

        $post = Post::create($attributes);
        return response()->json(['post published' ,'post'=>$post]);

    }


    public function update(PostRequest $request , $id )
    {
        $post = Post::find($id) ;
        $attributes = $request->validated();

        if($request->hasFile('image')){
            $image_path = request()->file('image')->store('post');
            $attributes['image'] = url("storage/$image_path");
        }

        $post->update(['title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'image' => $request->file('image'),
            'body' => $request->input('body'),
            'category_id'=>$request->input('category_id')
            ]);
        return response()->json(['post updated' ,'post'=>$post]);

    }

    public function destroy($id){
        $post = Post::find($id) ;
        $post->delete();
        return response()->json('post deleted') ;
    }
}
