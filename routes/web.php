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

Route::get('/user','UserController@index');
// Route::get('/user/create','UserController@create');
Route::post('/user/create','UserController@store');
Route::post('/user/store','UserController@store');
Route::get('/user/edit/{id}','UserController@edit');
Route::put('/user/edit/{id}','UserController@update');
Route::delete('/user/delete/{id}','UserController@destroy');
