<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class Task extends Model
{
    //
    protected $table="Tasks";
    protected $fillable=[
        'sTasks',
        'NoOfStudents',
        'Difficulty',
    ];

    public function Saving_Tasks(Request $data){
        $this::create($data->all());
        return true;
    }
}
