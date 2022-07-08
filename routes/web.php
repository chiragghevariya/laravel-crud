<?php

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

Route::get('/', function () { 
    return view('welcome');
});

Route::get('banners','\App\Http\Controllers\Bannercontroller@index')->name('banner.index');

// GET ADD BANNER FORM VIEW
Route::get('banners/create-form','\App\Http\Controllers\Bannercontroller@create')->name('banner.create-form-route');

// SAVE ADD BANNER FORM DATA
Route::post('banners/save-create-form','\App\Http\Controllers\Bannercontroller@store')->name('banner.save-create-form-route');

// GET edit BANNER FORM VIEW
Route::get('banners/{id}/edit-form','\App\Http\Controllers\Bannercontroller@edit')->name('banner.edit-form-route');

// update BANNER FORM DATA
Route::post('banners/update-banner-form','\App\Http\Controllers\Bannercontroller@update')->name('banner.update-form-route');

// GET edit BANNER FORM VIEW
Route::get('banners/{id}/delete-banner-form','\App\Http\Controllers\Bannercontroller@delete')->name('banner.delete-form-route');


            // url                                        function name           file name
Route::get('country','\App\Http\Controllers\Countrycontroller@listing')->name('country.listing');

Route::get('country/create-form','\App\Http\Controllers\Countrycontroller@create')->name('country.create-form');

Route::post('country/save-create-form','\App\Http\Controllers\Countrycontroller@savecreate')->name('country.save-create-form');

Route::get('country/{id}/edit-form','\App\Http\Controllers\Countrycontroller@edit')->name('country.edit-form-route');

Route::post('country/update-country-form','\App\Http\Controllers\Countrycontroller@update')->name('country.update-form-route');

Route::get('country/{id}/delet-country-form','\App\Http\Controllers\Countrycontroller@delete')->name('country.delete-form-route');


// state

Route::get('state','\App\Http\Controllers\Statecontroller@listing')->name('state.listing');

Route::get('state/create_form','\App\Http\Controllers\Statecontroller@create')->name('state.create_form');
 
Route::post('state/save-create-form','\App\Http\Controllers\Statecontroller@savecreate')->name('state.save-create-form');

Route::get('state/{id}/edit-form','\App\Http\Controllers\Statecontroller@edit')->name('state.edit-form-route');

Route::post('state/update-country-form','\App\Http\Controllers\Statecontroller@update')->name('state.update-form-route');

Route::get('state/{id}/delet-country-form','\App\Http\Controllers\Statecontroller@delete')->name('state.delete-form-route');

// city

Route::get('city','\App\Http\Controllers\Citycontroller@listing')->name('city.listing');

Route::get('city/add-form','\App\Http\Controllers\Citycontroller@create')->name('city.add-form');

Route::post('city/save-add-form','\App\Http\Controllers\Citycontroller@savecreate')->name('city.save-add-form');