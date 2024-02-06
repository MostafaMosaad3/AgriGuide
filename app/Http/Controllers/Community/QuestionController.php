<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Http\Requests\Community\QuestionRequest;
use App\Models\Question;
use http\Env\Request;
use Illuminate\Routing\Route;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('user')->paginate(6);
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
        $question = Question::with(['comments' , 'user'])->find($id) ;
        return response()->json(['question'=>$question]) ;

    }


}
