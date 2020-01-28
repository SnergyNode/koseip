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

Route::get('preview/qr/item/{key}', 'KekeController@qrItem')->name('qr.scan');



/**
 * ADMIN ROUTES BELOW
 */

Route::group(['middleware'=>'admin'], function () {
    Route::prefix('console')->group(function () {

        Route::get('dashboard', 'ConsoleController@dashboard')->name('admin.dashboard');
        Route::get('admin', 'ConsoleController@admin')->name('admin.admin');
        Route::get('admin/create', 'ConsoleController@newAdmin')->name('admin.create');
        Route::get('admin/show/{unid}', 'ConsoleController@showAdmin')->name('admin.show');

        Route::resource('state', 'StateController');
        Route::resource('lga', 'LgaController');
        Route::resource('area', 'AreaController');
        Route::resource('assoc', 'AssociationController');
        Route::resource('keke', 'KekeController');
        Route::resource('owner', 'OwnerController');
        Route::resource('rider', 'RiderController');

        Route::get('admin-user/logout', 'AuthController@logOut')->name('logout');

        Route::get('factory/generate', 'FactoryController@index')->name('generator');
        Route::post('factory/build', 'FactoryController@build')->name('factory.build');


        /**
         * QR CODE TEST
         */

        Route::get('qrcode', function () {
            return \SimpleSoftwareIO\QrCode\Facades\QrCode::size(300)->generate('A basic example of QR code!');
        });



        /**
         * CACHE CLEAR ROUTES
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


    });
});

