<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\WeeklyTasks;

class Accounts extends Model
{
    protected $table="Accounts";
    protected $fillable=[
        'NameID',
        'Position',
        'Team',
        'Email',
        'Batch',
        'Password',
        'Gender',
    ];

    public function relation_name(){
        return $this->hasOne('App\Model\Names', 'id', 'NameID');
    }

    public function relation_gender(){
        return $this->hasOne('App\Model\Gender', 'id', 'Gender');
    }

    public function relationto_task(){
        return $this->hasMany('WeeklyTasks', 'id', 'NameID');
    }
}
