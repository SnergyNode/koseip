<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{

    protected $fillable = [
        'name',
        'code',
        'unid',
        'info',
        'state_unid',
        'active',
        'added_by',
    ];

}
