<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    protected $table="Rules";
    protected $fillable=[
        'Rule',
        'RuledBy',
        'date',
    ];
}
