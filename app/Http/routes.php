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

//user routes

Route::get('/', 'HomeController@index');
Route::get('/addTreat', 'IndexController@addTreat');

//admin routes

Route::get('/tableAdd', 'AdminAddTablesController@index');
Route::get('/basics', 'AdminAttributesController@basics');
Route::get('/admin', 'AdminNavController@index');

//route group to add/remove attributes

Route::post('/admin/setAttribute', 'AdminAttributesController@setAttribute');
Route::post('/admin/removeAttribute', 'AdminAttributesController@removeAttribute');
Route::post('/admin/addTable', 'AdminAddTablesController@addTable');
Route::post('/admin/removeTable', 'AdminAddTablesController@removeTable');
Route::post('/admin/addReferenceTypes', 'AdminAddTablesController@addReferenceTypes');
Route::post('/admin/removeReferenceTypes', 'AdminAddTablesController@removeReferenceTypes');
Route::post('/object', 'IndexController@object');

