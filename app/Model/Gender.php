<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table="Gender";
    protected $fillable=[
        'id',
        'GenderName'
    ];

}
