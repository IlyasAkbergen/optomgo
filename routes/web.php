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

Route::group(['namespace' => 'Web'], function () {
    Route::get('/home', function () {
        return redirect(Route('home'));
    });
    Route::get('/', 'OfferController@index')->name('home');
    Route::resource('offers', 'OfferController');
});

Auth::routes();
