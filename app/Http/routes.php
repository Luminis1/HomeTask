<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/admin', 'AdminBasicsController@index');
Route::get('/addTreat', 'IndexController@addTreat');

//route group to basics table

Route::post('/admin/setLanguage', 'AdminBasicsController@setLanguage');
Route::post('/admin/removeLanguage', 'AdminBasicsController@removeLanguage');
Route::post('/admin/setLanguage', 'AdminBasicsController@setLanguage');
Route::post('/admin/removeLanguage', 'AdminBasicsController@removeLanguage');
Route::post('/admin/setCountry', 'AdminBasicsController@setCountry');
Route::post('/admin/removeCountry', 'AdminBasicsController@removeCountry');
Route::post('/admin/setTreat', 'AdminBasicsController@setTreat');
Route::post('/admin/removeTreat', 'AdminBasicsController@removeTreat');

