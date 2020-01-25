<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable = [
        'name',
        'code',
        'unid',
        'info',
        'state_unid',
        'lga_unid',
        'office',
        'phone',
        'active',
        'added_by',
    ];
}
