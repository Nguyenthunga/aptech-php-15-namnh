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
Route::get('/nam', function () {
    return view('nam');
});

// Route::get('/quetNha', 'Controller@hello');

// Route::get('/quetNha', function () {
//     $users = DB::table('users')->get();
//     return view('welcome', ['users' => $users]);
// });

Route::get('/users', 'Controller@index');
