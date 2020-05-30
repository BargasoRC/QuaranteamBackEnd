<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $table="Accounts";
    protected $fillable=[
        'NameID',
        'Position',
        'Team',
        'Email',
        'Batch',
        'Password'
    ];
}
