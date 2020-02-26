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

use App\http\Controllers\Resto\Home;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.resto.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('user')->namespace('Admin')->group(function(){
    Route::get('/','UserController@index')->middleware(['role:administrator']);
    Route::get('create','UserController@create');
    Route::post('store','UserController@store');
    Route::get('edit/{id}','UserController@edit');
    Route::put('edit/{id}','UserController@update');
    Route::delete('delete/{id}','UserController@destroy');
});

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

Route::get('/menu', 'MenuController@index');


Route::prefix('backend')->namespace('Admin')->group(function(){
    Route::get('/','DashboardController@index')->name('dashboard');
// Route::get('/menu', 'MenuController@index')->name('menu');
});

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/menu','MenuController@index')->name('menu');

});



Route::prefix('resto')->namespace('Resto')->group(function(){
    Route::get('/','HomeController@index')->name('home');
    
    Route::prefix('admin')->namespace('Admin')->group(function(){
        Route::get('/','DashboardController@index')->name('dashboard');
        Route::get('/hidangan','HidanganController@index')->name('hidangan');
        Route::get('/hidangan-baru','HidanganBaruController@index')->name('hidanganbaru');
        Route::get('/kategori-baru','KategoriBaruController@index')->name('kategoribaru');
    });
});


Route::get('/dolar','Resto\Home\HomeController@index');