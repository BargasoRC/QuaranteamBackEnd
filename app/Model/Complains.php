<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Complains extends Model
{
    //
    protected $table="Complains";
    protected $fillable=[
        'ComplainBy',
        'ConcernTo',
        'Complain',
        'date'
    ];
}
