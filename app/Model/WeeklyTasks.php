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

    public function relation_task(){
        return $this->hasMany('App\Models\Tasks', 'TaskID');
    }

    public function relation_names(){
        return $this->hasMany('App\Models\Names', 'NameID');
    }

    public function relation_maker(){
        return $this->hasOne('App\Models\Accounts', 'MakerID');
    }

    public function relation_coordinator(){
        return $this->hasOne('App\Models\Names', 'Coordinator');
    }

}
