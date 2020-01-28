<?php

namespace App\Http\Controllers;

use App\Model\Association;
use App\Model\Keke;
use App\Model\Owner;
use App\Model\State;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::paginate(30);
//        return $states;
        return view('admin.pages.owner.index')
            ->with('owners', $owners);
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
        return view('admin.pages.owner.add')
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

        $faker = Faker::create();

        $name = $request->input('name');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $a_state = $request->input('data_state');
        $a_assoc = $request->input('data_assoc');
        $a_keke = $request->input('data_keke');



        $unid = uniqid('N3r',false);
        $owner = new Owner();
        $owner->name = $name;
        $owner->surname_name = $surname;
        $owner->phone = $phone;
        $owner->address = $address;
        $owner->assoc_unid = $a_assoc;
        $owner->state_unid = $a_state;
        $owner->unid = $unid;
        $owner->active = true;
        $owner->email = $faker->email;

        $owner->save();

        $keke = Keke::where('unid', $a_keke)->first();
        $keke->owner_id = $unid;
        $keke->update();
        //

        return redirect()->route('owner.index')->withMessage('New Owner Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        //
    }
}
