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
Route::group(['middleware' => 'admin'], function () {

    //admin routes
    Route::get('/tableAdd', 'AdminAddTablesController@index');
    Route::get('/basics', 'AdminAttributesController@basics');
    Route::get('/admin', 'AdminNavController@index');
    Route::get('/modal', 'AdminAttributesController@modal');


//route group to add/remove attributes
    Route::post('/admin/setAttribute', 'AdminAttributesController@setAttribute');
    Route::post('/admin/setModal', 'AdminAttributesController@setModal');
    Route::post('/admin/removeModal', 'AdminAttributesController@removeModal');
    Route::post('/admin/setHelp', 'AdminAttributesController@setHelp');
    Route::post('/admin/setSlug', 'AdminAttributesController@setSlug');
    Route::post('/admin/removeAttribute', 'AdminAttributesController@removeAttribute');
    Route::post('/admin/addTable', 'AdminAddTablesController@addTable');
    Route::post('/admin/removeTable', 'AdminAddTablesController@removeTable');
    Route::post('/admin/addReferenceTypes', 'AdminAddTablesController@addReferenceTypes');
    Route::post('/admin/removeReferenceTypes', 'AdminAddTablesController@removeReferenceTypes');
    Route::get('/mail', 'Mails\MailController@mailer');
});

Route::group(['middleware' => 'user'], function () {
    Route::get('/addTreat', 'IndexController@addTreat');
    Route::post('/object', 'IndexController@object');
    Route::get('/treatList', 'IndexController@treatList');
});

Route::get('/', 'HomeController@index');
Route::get('/emailVerify/{token}', 'IndexController@emailVerify');








