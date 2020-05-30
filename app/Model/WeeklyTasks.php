<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WeeklyTasks extends Model
{
    protected $table="WeeklyTasks";
    protected $fillable=[
        'TasksID',
        'NameID',
        'Coordinator',
        'MakerID',
        'Date'
    ];
}
