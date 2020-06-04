<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Task;

class TasksController extends Controller
{
    //
    public function AddTasks(Request $request){
        $tasks = new Task();
        $validator = \Validator::make($request->all(), [
            'sTasks'=>'required',
            'NoOfStudents'=>'required',
            'Center'=>'required',
            'Difficulty'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json(["status"=>"error"]);
        }
        return response()->json($tasks->Saving_Tasks($request));
    }
}
