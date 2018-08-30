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

/*
 * Роуты авторизации ларавела
 */
Route::auth();


Route::group(['middleware' => 'admin'], function () {

/*
 * Группа роутов для аккаунтов с ролью Admin
 */

    Route::get('/tableAdd', 'AdminAddTablesController@index');
    Route::get('/basics', 'AdminAttributesController@basics');
    Route::get('/modal', 'AdminAttributesController@modal');

/*
 * Управление контентом и формами из админпанели
 */

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

/*
 * Группа роутов для аккаунтов роли User
 * Добавление ретрита, список созданых ретритов
 */

Route::group(['middleware' => 'user'], function () {
    Route::get('/addTreat', 'IndexController@addTreat');
    Route::post('/object', 'IndexController@object');
    Route::get('/treatList', 'IndexController@treatList');
});

/*
 * Роуты для незареганых пользователей. Стартовая страница с редиректами на логин,
 * проверка мэйла и отправка повторного письма для проверки мэйла
 * Поскольку регистрация не является стартовой страницей сайта, а в условиях тестового стартовой страницы нет,
 * по адресу mysite/ просто стоит редирект на логин
 */

Route::get('/', 'HomeController@index');
Route::get('/emailVerify/{token}', 'IndexController@emailVerify');
Route::get('/resendEmail', 'IndexController@resendEmail');








