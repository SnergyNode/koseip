<?php

namespace App\Http\Controllers;

use App\Model\Association;
use App\Model\Keke;
use App\Model\Owner;
use App\Model\Rider;
use App\Model\State;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riders = Rider::paginate(30);
//        return $states;
        return view('admin.pages.rider.index')
            ->with('riders', $riders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states= State::get();
        $assoc = Association::get();
        $kekes = Keke::get();

        return view('admin.pages.rider.add')
            ->with('states', $states)
            ->with('assoc', $assoc)
            ->with('kekes', $kekes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request->all();

        $faker = Faker::create();

        $name = $request->input('name');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $a_state = $request->input('data_state');
        $a_assoc = $request->input('data_assoc');
        $a_keke = $request->input('data_keke');



        $unid = uniqid('N3r',false);
        $rider = new Rider();
        $rider->name = $name;
        $rider->surname_name = $surname;
        $rider->phone = $phone;
        $rider->address = $address;
        $rider->assoc_unid = $a_assoc;
        $rider->state_unid = $a_state;
        $rider->unid = $unid;
        $rider->active = true;
        $rider->email = $faker->email;
        $rider->keke_unid = $a_keke;

        $rider->save();

        //

        return redirect()->route('rider.index')->withMessage('New Owner Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function show(Rider $rider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function edit(Rider $rider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rider $rider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rider $rider)
    {
        //
    }
}
