<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Http\Requests\Chat\SendMessageRequest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendMessage(SendMessageRequest $request)
    {
        $attributes = $request->validated();
        $attributes['sender_id'] = Auth()->id() ;

        $message = Message::create($attributes) ;

        return response()->json(['message' => $message]);
    }


    public function receiveMessage($id)
    {
        $user = Auth::user();

        $message = Message::where(function($query) use($id , $user){
            $query ->where('sender_id' , $user)
                    ->where('receiver_id' , $id);
            })->orwhere(function ($query) use ($user, $id){
            $query->where('sender_id', $id)
                ->where('receiver_id', $user->id);
        })->orderBy('created_at', 'desc')->get();

        return response(['message' =>$message]);

    }


    public function conversations(Request $request)
    {
        $user = Auth::user();
        $conversations = User::whereExists(function ($query) use ($user) {
            $query->selectRaw(1)
                ->from('messages')
                ->whereRaw('messages.sender_id = users.id')
                ->where('messages.receiver_id', $user->id);
        })->orWhereExists(function ($query) use ($user) {
            $query->selectRaw(1)
                ->from('messages')
                ->whereRaw('messages.receiver_id = users.id')
                ->where('messages.sender_id', $user->id);
        })->where('id', '!=', $user->id)
            ->select('id', 'name', 'thumbnail')
            ->get();


        foreach ($conversations as $recipient) {
            $lastMessage = Message::where('sender_id', $user->id)
                ->where('receiver_id', $recipient->id)
                ->orWhere(function ($query) use ($user, $recipient) {
                    $query->where('sender_id', $recipient->id)
                        ->where('receiver_id', $user->id);
                })
                ->orderBy('created_at', 'desc')
                ->first();

            $recipient->last_message = $lastMessage;
        }
        return response()->json(['users' => $conversations], 200);

    }


    public function conversation($id){

        $user = auth()->user() ;
        $messages = Message::where(function($query)use($user , $id){
           $query->where('sender_id' , $user->id)->where('receiver_id' , $id);
        })->orwhere(function($query)use($id , $user){
           $query->where('sender_id' , $id)->where('receiver_id' , $user->id);
        })->get();

        $conversation = $messages->map(function($message) use($user){
            return [
                'message'=>$message->message ,
                'sent by authenticated user' =>$message->sender_id == $user->id
            ];
        });

        return response()->json($conversation);
    }




}
