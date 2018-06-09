<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->get('logout', function () {
    return view('auth.logout');
});
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/organisation', 'DashboardController@index')->name('organisation');
Route::get('/schools', 'DashboardController@index')->name('schools');
Route::get('/licences', 'DashboardController@index')->name('licences');
