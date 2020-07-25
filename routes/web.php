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
Route::group(['namespace' => 'landing'], function () {
    Route::get('/', 'LandingController@index')->name('landing.index');
});

