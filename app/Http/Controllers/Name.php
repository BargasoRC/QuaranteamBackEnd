<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Names;
use DB;

class Name extends Controller
{
    public function retrieveNames(){
        //Fetch all the Names of the students
        $StudentNames = new Names();
        return response()->json($StudentNames->fetch_names());
    }
}
