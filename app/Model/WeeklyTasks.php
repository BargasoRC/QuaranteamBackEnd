<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Tasks;
use App\Model\Names;
use App\Model\Accounts;


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

    public function task_relation(){
        return $this->belongsTo('Tasks', 'sTasks', 'TasksID');
    }

    public function relation_names(){
        return $this->belongsTo('Names', 'id', 'NameID');
    }

    public function relation_maker(){
        return $this->belongsTo('Accounts', 'id' , 'MakerID');
    }

    public function fetch_taskings(){
        $weekTaskList = WeeklyTasks::where('MakerID', 73)->get();
        return $weekTaskList;
    }

}
