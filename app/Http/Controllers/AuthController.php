<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(){
        return view('pages.auth.login');
    }

    public function verifyAdmin(Request $request){
//        return $request->all();
        $access = trim($request->input('access'));
        $password = trim($request->input('secret'));

        if(filter_var($access, FILTER_VALIDATE_EMAIL)){
            if (Auth::attempt(['email' => $access, 'password' => $password])) {
                return redirect(route('admin.dashboard'));
            }
            else {
                return back()->withErrors(array('access' => 'Invalid credentials given'))->withInput($request->input());
            }
        }else{
            if (Auth::attempt(['username' => $access, 'password' => $password])) {
                return redirect(route('admin.dashboard'));
            }
            else {
                return back()->withErrors(array('access' => 'Invalid credentials given'))->withInput($request->input());
            }
        }

    }

    public function logOut(){
        Auth::logout();
        return redirect()->route('login')->withMessage('You have been logged out.');
    }
}
