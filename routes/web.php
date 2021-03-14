<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('change-lang/{locale}', 'ServiceController@switchLang')->name('switch-lang');
Route::group(['namespace' => 'Landing'], function () {
    Route::get('/', 'LandingController@index')->name('landing.index');
});
Route::group(['namespace' => 'RecSystem'], function () {
    Route::get('/rec-system/description', 'RecSystemController@description')->name('rec-system.description');
});
Route::group(['namespace' => 'Overview',  'prefix' => 'overview'], function () {
    Route::get('/arduino', 'OverviewController@arduino')->name('overview.arduino');
    Route::get('/ide', 'OverviewController@ide')->name('overview.ide');
    Route::get('/rpi', 'OverviewController@rpi')->name('overview.rpi');
    Route::get('/oh', 'OverviewController@oh')->name('overview.oh');
});

Route::group(['namespace' => 'Arduino', 'prefix' => 'experiments'], function () {
    //descriptions
    Route::get('/distance', 'DescriptionController@distance')->name('experiments.distance.description');
    Route::get('/servo', 'DescriptionController@servo')->name('experiments.servo.description');
    Route::get('/led', 'DescriptionController@led')->name('experiments.led.description');
    Route::get('/display', 'DescriptionController@display')->name('experiments.display.description');
    //examples
    Route::group(['prefix' => 'example'], function () {
        Route::get('/distance', 'ExampleController@distance')->name('experiments.distance.example');
        Route::get('/servo', 'ExampleController@servo')->name('experiments.servo.example');
        Route::get('/led', 'ExampleController@led')->name('experiments.led.example');
        Route::get('/display', 'ExampleController@display')->name('experiments.display.example');
    });
    //run
    Route::group(['prefix' => 'run'], function () {
        Route::get('/distance', 'RunController@distance')->name('experiments.distance.run');
        Route::get('/servo', 'RunController@servo')->name('experiments.servo.run');
        Route::get('/led', 'RunController@led')->name('experiments.led.run');
        Route::get('/display', 'RunController@display')->name('experiments.display.run');
    });
});
