<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
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

    public function names(){
        return $this->name . " " . $this->surname_name;
    }

    public function kekeId(){
        $keke = Keke::where('owner_id', $this->unid)->first();
        return !empty($keke)?$keke->plate:'Not Updated';
    }

    public function assoc(){
        return $this->hasOne(Association::class, 'unid', 'assoc_unid');
    }

}
