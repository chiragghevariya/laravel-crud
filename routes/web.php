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