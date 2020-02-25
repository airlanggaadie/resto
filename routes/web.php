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
    return view('pages.resto.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/menu', 'MenuController@index')->name('menu');

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/menu','MenuController@index')->name('menu');

});

Route::prefix('resto')->namespace('Resto')->group(function(){
    Route::get('/','DashboardController@index')->name('dashboard');
    Route::get('/hidangan','HidanganController@index')->name('hidangan');
    Route::get('/hidangan-baru','HidanganBaruController@index')->name('hidanganbaru');

});
