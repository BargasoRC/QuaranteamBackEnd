<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Accounts;
use App\Model\WeeklyTasks;

class Names extends Model
{
    //
    protected $table="Names";
    protected $fillable=[
        'FirstName',
        'MiddleName',
        'LastName',
        'Suffix'
    ];

    public function fetch_names(){
        $names = DB::table('Names')->get();
        return $names;
    }

    public function relation_account(){
        return $this->belongsTo('Accounts', 'NameID', 'id');
    }

    public function relation_task(){
        return $this->hasMany('WeeklyTasks', 'id', 'NameID');
    }

    public function fetch_batch(){
        $accLists = Accounts::where('Batch', '2020B')->with('relation_name')->get();
        return $accLists;
    }

}
