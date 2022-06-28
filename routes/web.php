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
Route::get('banners/save-create-form','\App\Http\Controllers\Bannercontroller@store')->name('banner.save-create-form-route');