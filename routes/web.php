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
    Route::get('/distance', 'ExperimentController@distance')->name('experiments.distance');
    Route::get('/servo', 'ExperimentController@servo')->name('experiments.servo');
    Route::get('/led', 'ExperimentController@led')->name('experiments.led');
    Route::get('/display', 'ExperimentController@display')->name('experiments.display');
});
