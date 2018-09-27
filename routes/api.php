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

    Route::post('school-code-exchange', 'SchoolCodeExchangeController@exchange');
    Route::options('school-code-exchange', 'SchoolCodeExchangeController@options');

    Route::get('user', 'ApiUsersController@user');
    Route::apiResource('users', 'ApiUsersController');

    Route::apiResource('organisations', 'ApiOrganisationsController');
    Route::get('organisations/{organisation}/users', 'ApiOrganisationsController@users')->name('organisations.users');

    Route::apiResource('schools', 'ApiSchoolsController');

    Route::apiResource('licences', 'ApiLicencesController');
    Route::apiResource('licence-plans', 'ApiLicencePlansController');
});
