<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('user', 'UserController@index')->name('get_user');

Route::get('user/abc/{slug}', 'UserController@detail')->name('get_abc_detail');
Route::post('user/edit', 'UserController@save')->name('get_abc_edit');