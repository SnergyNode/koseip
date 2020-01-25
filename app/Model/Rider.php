<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'unid',
        'surname_name',
        'middle_name',
        'last_name',
        'phone',
        'passport',
        'address',
        'assoc_unid',
        'active',
        'current',
        'keke_unid',
        'password',
        'creator_id',
        'owner_id',
        'state_unid',
        'lga_unid',
        'countdown_pass',
    ];
}
