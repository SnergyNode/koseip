<?php

namespace App\Http\Controllers;

use App\Model\Area;
use App\Model\Association;
use App\Model\Keke;
use App\Model\Lga;
use App\Model\Owner;
use App\Model\Rider;
use App\Model\State;
use Illuminate\Http\Request;

class KekeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keke = Keke::orderBy('id', 'desc')->paginate(30);
//        return $states;
        return view('admin.pages.keke.index')
            ->with('kekes', $keke);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state = State::where('active', true)->get();
        $lgas = Lga::where('active', true)->get();
        $area = Area::where('active', true)->get();
        $assoc = Association::where('active', true)->get();
        $owner = Owner::where('active', true)->get();
        $rider = Rider::where('active', true)->get();
        return view('admin.pages.keke.add')
            ->with('rider', $rider)
            ->with('owners', $owner)
            ->with('assoc', $assoc)
            ->with('lgas', $lgas)
            ->with('areas', $area)
            ->with('states', $state);
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

        $state = State::where('unid', $request->input('state_unid'))->first();
        $lga = Lga::where('unid', $request->input('lga_unid'))->first();
        $area = Area::where('unid', $request->input('area_unid'))->first();
        $assoc = Association::where('unid', $request->input('asst_unid'))->first();
        $plate = strtoupper($request->input('plate'));

        $plate_exist = Keke::where('plate', $plate)->first();
        if(!empty($plate_exist)){
            return back()->withErrors(array('errors'=>"Plate Number ($plate) already Exists"))->withInput($request->input());
        }

        $unid = uniqid('K3KE',false);
        $e_keke = Keke::where('state_code', $state->code)
            ->where('lga_code', $lga->code)
            ->where('area_code', $area->code)
            ->where('assoc_code', $assoc->code)
            ->get();


        $e_keke = intval($e_keke->count())+1;
        $keke_id = sprintf("%05d", $e_keke);
        $code = $state->code.$lga->code.$area->code.$assoc->code.$plate.$keke_id;

        $keke = new Keke();
        $keke->state_unid = $state->unid;
        $keke->lga_unid = $lga->unid;
        $keke->area_unid = $area->unid;
        $keke->asst_unid = $assoc->unid;
        $keke->unid = $unid;
        $keke->state_code = $state->code;
        $keke->lga_code = $lga->code;
        $keke->area_code = $area->code;
        $keke->assoc_code = $assoc->code;
        $keke->plate = $plate;
        $keke->keke_id = $keke_id;
        $keke->code = $code;
        $keke->active = true;
        $keke->save();

        return redirect()->route('keke.index')->withMessage('New Data Recorded');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Keke  $keke
     * @return \Illuminate\Http\Response
     */
    public function show($unid)
    {
        $keke = Keke::where('unid', $unid)->first();
        if(!empty($keke)){
            return view('admin.pages.keke.show')->with('keke', $keke);
        }
        return back()->withErrors(array('warning'=>'unable to complete request'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Keke  $keke
     * @return \Illuminate\Http\Response
     */
    public function edit(Keke $keke)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keke  $keke
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keke $keke)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keke  $keke
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keke $keke)
    {
        //
    }

    public function qrItem(Request $request, $code){
        //return the details of the keke
        $keke = Keke::where('code', $code)->get();

        return view('pages.home.search')->with('kekes', $keke);
    }

    public function searchRef(Request $request){
        //search for value
        $pin = $request->input('needle');

        $keke = Keke::query()
            ->where('plate', 'LIKE', "%{$pin}%")
            ->where('area_code', 'LIKE', "%{$pin}%")
            ->where('assoc_code', 'LIKE', "%{$pin}%")
            ->orWhere('code', 'LIKE', "%{$pin}%")
            ->get();

        return view('pages.home.search')->with('kekes', $keke);
    }
}
