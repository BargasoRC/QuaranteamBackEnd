<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Task;
use App\Model\Names;

class TasksController extends Controller
{
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

    public function getAllTaskings(){
        $array = [];
        $tasks = new Task();
        $taskingLists = $tasks->getAllTasks();
        for($i = 0; $i < count(array($taskingLists)[0]); $i++){
            array_push($array,array($taskingLists)[0][$i]);
        }
        return $array;
    }

    public function getAllNames(){
        $array = [];
        $names = new Names();
        $nameLists = $names->fetch_batch();
        for($i = 0; $i < count(array($nameLists)[0]); $i++){
            array_push($array,array($nameLists)[0][$i]);
        }
        return $array;
    }

    public function AutogenerateTasks(){
        $store = [];
        $taskingList = $this->getAllTaskings();
        $nameLists = $this->getAllNames();

        for($x = 0; $x<count($taskingList); $x++){
            $girlsNeeded = $taskingList[$x]->NoOfStudents*.75;
            for($y = 0; $y<count($taskingList[$x]->NoOfStudents); $y++){
                
            }


        }

    }

    
}
