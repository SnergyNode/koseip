<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name',
        'code',
        'unid',
        'info',
        'active',
        'added_by',
    ];

    public function lgas(){
        return Lga::where('state_unid', $this->unid)->select([ 'name', 'code', 'unid',])->get();
    }

    public function oneLgaID(){
        //return one unid from the lga

        $lgas = $this->lgas();
        if(!empty($lgas)){
            return $lgas[0]->unid;
        }
        return null;


    }

    public function oneAssID(){
        $assoc = Association::where('state_unid', $this->unid)->select([ 'name', 'code', 'unid',])->get();
        if(!empty($assoc)){
            return $assoc[0]->unid;
        }
        return null;
    }

    public function assoc_count(){
        //return number of association in state
        $assoc = Association::where('state_unid', $this->unid)->get();
        return intval($assoc->count());
    }
}
