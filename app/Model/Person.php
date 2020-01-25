<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
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
        'office',
        'assoc_unid',
        'active',
        'password',
        'creator_id',
        'state_unid',
        'lga_unid',
        'countdown_pass',
    ];
}
