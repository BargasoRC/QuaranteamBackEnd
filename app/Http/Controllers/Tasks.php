<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Task;

class Tasks extends Controller
{
    //
    public function AddTasks(Request $request){
        $validation = $request->validate([
            'sTasks'=>'required',
            'NoOfStudents'=>'required',
            'Center'=>'required',
            'Difficulty'=>'required'
        ]);
        if($validation->fails()){
            return "failed";
        }else{
            $add = new Tasks();
            return response()->json($add->Saving_Tasks($request));
        }
    }
}
