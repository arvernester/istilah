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

Route::get('/', 'PageController');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Service'], function () {
    Route::get('user/me', 'UserController@me');
    Route::apiResource('user', 'UserController');

    Route::apiResource('urban/dictionary', 'Urban\DictionaryController');

    Route::get('search', 'SearchController@search');
});
