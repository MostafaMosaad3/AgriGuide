<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Http\Requests\Community\QuestionRequest;
use App\Models\Like;
use App\Models\Question;
use http\Env\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with(['user' => function ($query){
            $query->select('id' , 'name' , 'thumbnail');
        }])->orderBy('likes' , 'desc')->paginate(6);
        return response()->json(['questions'=>$questions]);
    }


    public function create(QuestionRequest $request){

        $attributes = $request->validated() ;

        $attributes['user_id'] = auth()->id();
         if($request->hasFile('image')){
             $image_path = request()->file('image')->store('question');
             $attributes['image'] = url("storage/$image_path");
         }

        $question = Question::create($attributes);

         return response()->json(['question published' ,'question'=>$question]);

    }

    public function show($id){
        $question = Question::with('user:id,name,thumbnail')->find($id) ;

        $comments = $question->comments()->with('user:id,name,thumbnail')->get();

        if (!$question) {
            return response()->json(['message' => 'Question not found'], 404);
        }
        return response()->json(['question'=>$question , 'comments'=>$comments]);

    }

    public function add_like($id)
    {
        $question = Question::find($id);
        $user_id = Auth::id();

        $question->likes()->create(['user_id' => $user_id] , ['$question_id' =>$question->id]);
        $question->likes += 1;
        $question->save();
        return response()->json(['message' => 'Questions liked successfully.'], 200);
    }


    public function all_likes($id)
    {
        $question = Question::find($id) ;
        return response()->json(['question_likes'=>$question->likes]);
    }


}
