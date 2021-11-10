<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\UserController;
use App\Http\Controllers\Experiment\ExperimentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => ['web']], function () {

    Route::get('/auth/me', [UserController::class, 'me'])->name('api.auth.me');
});

Route::group(['middleware' => ['auth:api']], function () {

    Route::get('/queue/state', [ExperimentsController::class, 'queueState'])->name('queue.state');
});


