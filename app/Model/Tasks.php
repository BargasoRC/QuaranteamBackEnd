<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //
    protected $table="Tasks";
    protected $fillable=[
        'sTasks',
        'NoOfStudents',
        'Difficulty',
    ];
}
