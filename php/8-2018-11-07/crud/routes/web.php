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

// 1 - route xem tat ca nguoi dung
Route::get('/users', 'UserController@index');

Route::get('/users/create', 'UserController@create');
Route::get('/users/{id}', 'UserController@show');
Route::delete('/users/{id}', 'UserController@destroy');

// 5 - route luu du lieu nguoi dung
Route::post('/users', 'UserController@store')->name('users.store');
