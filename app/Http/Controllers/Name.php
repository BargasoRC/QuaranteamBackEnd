<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Name extends Controller
{
    //
    public function retrieveNames(){
        //Fetch all the Names of the students
        $names = DB::table('Names')->get();
        return response()->json($names);
    }
}
