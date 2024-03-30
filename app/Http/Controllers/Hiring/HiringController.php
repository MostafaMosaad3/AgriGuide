<?php

namespace App\Http\Controllers\Hiring;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hiring\HiringRequest;
use App\Mail\HiringMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HiringController extends Controller
{
    public function hiring(HiringRequest $request){

        $message = $request->validated() ;

        $owner = 'mm9852803@gmail.com' ;
        Mail::to($owner)->send(new HiringMail($message));
        return response()->json(['message' => 'Application submitted successfully']);

    }
}
