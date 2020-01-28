<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable = [
        'name',
        'code',
        'unid',
        'assoc_id',
        'info',
        'state_unid',
        'lga_unid',
        'office',
        'phone',
        'active',
        'added_by',
    ];

    public function state(){
        return $this->hasOne(State::class, 'unid', 'state_unid');
    }
}
