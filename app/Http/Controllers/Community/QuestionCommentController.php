<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Http\Requests\Community\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class QuestionCommentController extends Controller
{
    public function add_comment(CommentRequest $request , $id){
        $attributes =$request->validated();

        $attributes['user_id']= auth()->id();
        $attributes['question_id']= $id ;

        $comment = Comment::create($attributes) ;

        return response()->json(['comment added !' ,
            'body' => $comment->body,
            'name' => auth()->user()->name,
            'thumbnail' => auth()->user()->thumbnail,]);

    }
}
