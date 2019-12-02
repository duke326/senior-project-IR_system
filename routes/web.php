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

Route::get('/', 'UserController@initial' );

Route::get('/error', function () {
    return view('error');
});

Route::get('/show', 'UserController@search' );
Route::get('/detail', 'UserController@result' );
