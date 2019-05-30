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

Route::get('/timer', function () {
    return view('layouts.timer');
});

Route::get('/', 'TranslateController@index');
Route::get('/translate', 'TranslateController@show');
Route::post('/translate', 'TranslateController@create');
