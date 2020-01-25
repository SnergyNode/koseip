<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'name',
        'code',
        'unid',
        'info',
        'state_unid',
        'lga_unid',
        'active',
        'added_by',
    ];
}
