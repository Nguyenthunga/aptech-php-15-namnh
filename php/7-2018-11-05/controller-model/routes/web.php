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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/users', 'UserController@index');
// Route::get('/motUsers', 'UserController@show');
// Route::get('/xoaUser', 'UserController@destroy');
// Route::resource('users', 'UserController');

// Route::get('/users-data', function () {
//     // $users = DB::table('users')->get();
//     // $users = User::all()->toArray();
//     $users = User::paginate(5);
//     dd($users);
//     // return $users;
return view('users', ['users' => $users]);
// });

// Route::get('users', 'UserController@index');
Route::get('/users/{id}', 'UserController@show');
