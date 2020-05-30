<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Complains extends Model
{
    //
    protected $table="Names";
    protected $fillable=[
        'FirstName',
        'MiddleName',
        'LastName',
        'Suffix'
    ];
}
