<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Keke extends Model
{
    protected $fillable = [
        'state_unid',
        'lga_unid',
        'area_unid',
        'asst_unid',
        'unid',
        'state_code',
        'lga_code',
        'area_code',
        'assoc_code',
        'plate',
        'keke_id',
        'chasis',
        'owner_id',
    ];
}
