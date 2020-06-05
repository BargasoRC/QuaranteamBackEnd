<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Accounts;

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
        return $this->belongsTo('Accounts');
    }

    public function fetch_batch(){
        $accLists = Accounts::where('Batch', '2020B')->with('relation_name')->get();
        return $accLists;
    }

}
