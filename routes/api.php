<?php

use Illuminate\Http\Request;
use Carbon\Carbon;

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

Route::namespace('Api')->group(function () {
    // Ping
    Route::get('ping', function () {
        return ['pong' => Carbon::now()->toDateTimeString()];
    });

    Route::get('user', 'ApiUsersController@user');
    Route::apiResource('users', 'ApiUsersController');
    Route::apiResource('organisations', 'ApiOrganisationsController');
    Route::apiResource('schools', 'ApiSchoolsController');
});
