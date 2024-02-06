<?php

namespace App\Http\Controllers\Consultion;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class InstractorController extends Controller
{
    public function index(){
        $instructor = User::where('is_admin' , true)->paginate(6) ;
        return response()->json(['instructors'=>$instructor]) ;
    }

    public function show($id){
        $instructor = User::where('is_admin' , true)->where('id' , $id)->first() ;
        return response()->json(['instructor'=>$instructor]) ;
    }
}
