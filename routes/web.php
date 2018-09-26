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
    return view('web.home');
})->name('home');

Route::get('our-products/security-labels', function () {
    return view('web.security-labels');
})->name('security_labels');

Route::get('our-products/inventory', function () {
    return view('web.inventory');
})->name('inventory');

Route::get('our-products/b2-freedom', function () {
    return view('web.b2-freedom');
})->name('freedom');

Route::get('our-products', function () {
    return view('web.our-products');
})->name('our-products');

Route::get('our-services/onsite-asset-discovery', function () {
    return view('web.onsite-asset-discovery');
})->name('onsite-asset-discovery');

Route::post('contact', 'ContactFormController@contact')->name('contact');

Route::middleware('auth')->get('logout', function () {
    return view('auth.logout');
})->name('logout');
Auth::routes();

Route::middleware(['no-organisation'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard/organisations', 'OrganisationsController@index')->name('organisations');
    Route::get('/dashboard/schools', 'SchoolsController@index')->name('schools');
    Route::get('/dashboard/licences', 'LicencesController@index')->name('licences');
    Route::get('/dashboard/licences/callback', 'LicencesController@callback')->name('licences.callback');
});

Route::get('organisations', 'OrganisationsController@create')->name('organisations.create');
Route::post('organisations', 'OrganisationsController@store')->name('organisations.store');
