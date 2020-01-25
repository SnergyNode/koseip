<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'user_id',
        'state_id',
        'lga_id',
        'area_id',
        'assoc_id',
        'owner_id',
        'rider_id',
        'keke_id',
        'note_id',
        'author',
        'time',
        'details',
        'active',
    ];
}
