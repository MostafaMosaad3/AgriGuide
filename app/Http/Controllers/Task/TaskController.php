<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::select('id , title' , 'status');
        return response()->json(['tasks' => $tasks]);
    }


    public function create(TaskRequest $request)
    {
        $attributes = $request->validated() ;
        $attributes['user_id'] = Auth()->id() ;

        $task = Task::create($attributes);
        return response()->json(['task created' ,'task'=>$task]);


    }

    public function edit($id){
        $task = Task::find($id) ;
        return response()->json($task);
    }


    public function update(TaskRequest $request , $id )
    {
        $task = Task::find($id) ;
        $attributes = $request->validated();


        $task->update(['title' => $request->input('title'),
            'description' => $request->input('description'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'status'=>$request->input('status')
        ]);
        return response()->json(['task updated' ,'task'=>$task]);

    }

    public function destroy($id){
        $task = Task::find($id) ;
        $task->delete();
        return response()->json('task deleted') ;
    }
}
