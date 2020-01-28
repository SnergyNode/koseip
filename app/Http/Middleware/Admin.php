<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(intval(Auth::user()->who) > 0){
                Auth::user()->seen_last = time();
                Auth::user()->update();
                View::share('person', Auth::user());
                $adminCount = User::get()->count();
                View::share('admin_count', $adminCount);
                return $next($request);
            }else{
                Auth::logout();
                return redirect()->route('login')->withErrors(array('access' => 'Invalid credentials given'));
            }
        }else{
            Auth::logout();
            return redirect()->route('login')->withErrors(array('access' => 'Invalid credentials given'));
        }
    }
}
