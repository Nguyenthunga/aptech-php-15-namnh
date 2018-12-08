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
Route::get('/index','UserController@index')->name('user.index');
Route::get('/index/create', 'UserController@create')->name('user.create');
Route::get('/index/{id}', 'UserController@show')->name('user.show');
Route::delete('/index/{id}', 'UserController@destroy')->name('user.destroy');
Route::get('/index/{id}/edit', 'UserController@edit')->name('user.edit');
Route::put('/index/{id}/edit', 'UserController@update')->name('user.update');