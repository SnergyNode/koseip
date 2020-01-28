<?php

namespace App\Http\Controllers;

use App\Model\Association;
use App\Model\Keke;
use App\Model\Owner;
use App\Model\Rider;
use App\User;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    public function dashboard(Request $request){


        $keke = Keke::get()->count();
        $riders = Rider::get()->count();
        $owners = Owner::get()->count();
        $assoc = Association::get()->count();

        return view('admin.pages.dashboard.index')
            ->with('keke', $keke)
            ->with('riders', $riders)
            ->with('owners', $owners)
            ->with('assoc', $assoc);
    }

    public function admin(Request $request){
        $admins = User::paginate(30);
        return view('admin.pages.admin.index')
            ->with('admins', $admins);
    }

    public function newAdmin(){
        return view('admin.pages.admin.add');
    }

    public function showAdmin(){
        return view('admin.pages.admin.show');
    }
}
