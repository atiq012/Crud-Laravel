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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::post('test','TestController@store');
Route::get('test','TestController@index');
Route::get('/edit/{id}','TestController@edit');
Route::post('/update/{id}','TestController@update');
Route::get('/delete/{id}','TestController@destroy');

