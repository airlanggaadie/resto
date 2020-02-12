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

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('user')->group(function(){
    Route::get('/','UserController@index');
    Route::get('/user/create','UserController@create');
    // Route::post('/create','UserController@store');
    Route::post('/store','UserController@store');
    Route::get('/edit/{id}','UserController@edit');
    Route::put('/edit/{id}','UserController@update');
    Route::delete('/delete/{id}','UserController@destroy');
});
