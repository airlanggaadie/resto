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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('tables/create','TablesController@store');
Route::get('tables/show/{id}','TablesController@show');
Route::post('tables/update/{id}','TablesController@update');
Route::delete('tables/delete/{id}','TablesController@destroy');

Route::post('booking/create','BookingController@store');
Route::get('booking/show/{id}','BookingController@show');
Route::delete('booking/delete/{id}','BookingController@destroy');

Route::post('resto/create','RestaurantController@store');
Route::get('resto/show/{id}','RestaurantController@show');
Route::post('resto/update/{id}','RestaurantController@update');
Route::delete('resto/delete/{id}','RestaurantController@destroy');