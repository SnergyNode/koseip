<?php

namespace App\Http\Controllers;

use App\Model\Area;
use App\Model\Association;
use App\Model\Keke;
use App\Model\Lga;
use App\Model\Rider;
use App\Model\State;
use Illuminate\Http\Request;
//use Faker\Generator as Faker;
use Faker\Factory as Faker;

class FactoryController extends Controller
{
    public function index(){
        $states = State::where('active', true)->select(['unid', 'name'])->get();
        return view('admin.pages.factory.index')
            ->with('states', $states);
    }

    public function build(Request $request){


        $state = $request->input('data_states');
        $type = $request->input('build_type');
        $number = intval($request->input('data_number'));

//        return empty($state)?'empty':'not empty '.$state;

//        return [$state, $type, $number];

        if(!empty($state)){
            if($state==='all'){
                $this->buildStates($state, $type, $number);
            }else{
                $this->buildOneState($state, $type, $number);
            }
            return back()->withMessage('Build Completed Successfully');
        }
        return back()->withErrors(array('errors'=>'No state found'));


    }

    public function buildItem($type, $number, $state){
        for($x = 0; $x < $number; $x++){

            if($type === 'lga'){

                $lga = new Lga();
                $faker = Faker::create();
                $name = $faker->city;
                $code = strtoupper(substr($name,0 , 2));

                $lga->name = $name;
                $lga->code = $code;
                $lga->active = true;
                $lga->unid = uniqid('LGA',false);
                $lga->state_unid = $state->unid;
                $lga->added_by = "system";
                $lga->save();

            }

            if($type === 'area'){

                if(!empty($state->oneLgaID())){
                    $faker = Faker::create();
                    $name = $faker->streetName;
                    $code = strtoupper(substr($name,0 , 2));

                    $area = new Area();
                    $area->name = $name;
                    $area->code = $code;
                    $area->unid = uniqid('AR3A',false);
                    $area->state_unid = $state->unid;
                    $area->added_by = "system";
                    $area->lga_unid = $state->oneLgaID();
                    $area->active = true;
                    $area->save();
                }

            }



            if($type === 'assoc'){

                if(!empty($state->oneLgaID())){
                    $faker = Faker::create();
                    $name = $faker->userName;
                    $code = strtoupper(substr($name,0 , 3));

                    $assoc_id = sprintf("%02d", $state->assoc_count()+1);

                    $assoc = new Association();
                    $assoc->name = $name;
                    $assoc->code = $code;
                    $assoc->unid = uniqid('AS0t',false);
                    $assoc->assoc_id = $assoc_id;
                    $assoc->state_unid = $state->unid;
                    $assoc->lga_unid = $state->oneLgaID();
                    $assoc->office = $faker->address;
                    $assoc->phone = $faker->phoneNumber;
                    $assoc->active = true;
                    $assoc->save();

                }

            }

            //keke is manual o, too complex for the rush work
            if($type === 'keke'){

            }

            //rider and owner are manual for now too
            if($type === 'rider'){

            }

            if($type === 'owner'){

            }

            if($type === 'KR'){

            }

            if($type === 'RO'){

            }

            if($type === 'OK'){

            }

            if($type === 'all'){

            }

        }
    }

    public function buildOneState($statez, $type, $number){
        $dstate = State::where('unid', $statez)->get();
        foreach ($dstate as $state){
            $this->buildItem($type, $number, $state);
        }
    }

    public function buildStates($statez, $type, $number){
        $allStates = State::select(['code', 'unid',])->get();

        foreach ($allStates as $state){
            $this->buildItem($type, $number, $state);
        }
    }
}
