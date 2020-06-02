<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

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
}
