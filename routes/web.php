<?php

use \Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/', 'HomeController@index')->name('home');
Route::get('login', 'AuthController@login')->name('login');
Route::post('admin/verify', 'AuthController@verifyAdmin')->name('admin.login');


/**
 * CACHE CLEAR ROUTES
 */













/**
 * SUPER ADMIN ROUTES BELOW
 */

 //Clear route cache:
 Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/clear_config_cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
}); 

// Clear application cache:
Route::get('/clear_app_cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cache:
Route::get('/clear_view', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});
