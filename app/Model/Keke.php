<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Keke extends Model
{
    protected $fillable = [
        'state_unid',
        'lga_unid',
        'area_unid',
        'asst_unid', //association (assoc in other places)
        'unid', //unid
        'state_code',
        'lga_code',
        'area_code',
        'assoc_code',
        'plate',
        'keke_id', //00001
        'code', //combined string
        'chasis',
        'owner_id',
        'active',
    ];

    public function state(){
        return $this->hasOne(State::class, 'unid', 'state_unid');
    }
    public function lga(){
        return $this->hasOne(Lga::class, 'unid', 'lga_unid');
    }
    public function area(){
        return $this->hasOne(Area::class, 'unid', 'area_unid');
    }
    public function assoc(){
        return $this->hasOne(Association::class, 'unid', 'asst_unid');
    }

    public function owner(){
        return $this->hasOne(Owner::class, 'unid', 'owner_id');
    }

    public function riders(){
        return $this->hasMany(Rider::class, 'keke_unid', 'unid');
    }

    public function riderOne($key){
        $rider = Rider::where('keke_unid', $this->unid)->where('active', true)->first();

        return !empty($rider)?$rider->$key:null;
    }
}
