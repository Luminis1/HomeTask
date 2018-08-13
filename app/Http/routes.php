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
Route::get('/admin', 'AdminBasicsController@basics');
Route::get('/addTreat', 'IndexController@addTreat');

//route group to basics table

Route::post('/admin/setAttribute', 'AttributeController@setAttribute');
Route::post('/admin/removeAttribute', 'AttributeController@removeAttribute');

