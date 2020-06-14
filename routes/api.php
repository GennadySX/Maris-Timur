<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'sx'
    //,'middleware' => ['auth:api']
], function () {

    Route::group(['prefix' => 'email'], function () {
        Route::get('/', 'EmailerController@index');
        Route::get('by/{id}', 'EmailerController@getBy');
        Route::post('send', 'EmailerController@create');
    });

    Route::group(['prefix' => 'abonent'], function () {
        Route::get('/', 'AbonentController@index');
        Route::get('by/{id}', 'AbonentController@getBy');
        Route::post('create', 'AbonentController@create');
        Route::post('update', 'AbonentController@update');
        Route::delete('delete/{id}', 'AbonentController@destroy');
    });

    Route::group(['prefix' => 'agreements'], function () {
        Route::get('/', 'AgreementsController@index');
        Route::get('by/{id}', 'AgreementsController@getBy');
        Route::post('create', 'AgreementsController@create');
        Route::post('update', 'AgreementsController@update');
        Route::delete('delete/{id}', 'AgreementsController@destroy');
    });

    Route::group(['prefix' => 'chat'], function () {
        Route::get('/', 'ChatController@index');
        Route::get('by/{id}', 'ChatController@getBy');
        Route::post('create', 'ChatController@create');
        Route::post('update', 'ChatController@update');
        Route::delete('delete/{id}', 'ChatController@destroy');
    });

    Route::group(['prefix' => 'department'], function () {
        Route::get('/', 'Department@index');
        Route::get('by/{id}', 'Department@getBy');
        Route::post('create', 'Department@create');
        Route::post('update', 'Department@update');
        Route::delete('delete/{id}', 'Department@destroy');
    });

    Route::group(['prefix' => 'document'], function () {
        Route::get('/', 'DocumentController@index');
        Route::get('by/{id}', 'DocumentController@getBy');
        Route::post('create', 'DocumentController@create');
        Route::post('update', 'DocumentController@update');
        Route::delete('delete/{id}', 'DocumentController@destroy');
    });

    Route::group(['prefix' => 'files'], function () {
        Route::get('/', 'FilesController@index');
        Route::get('by/{id}', 'FilesController@getBy');
        Route::post('create', 'FilesController@create');
        Route::post('update', 'FilesController@update');
        Route::delete('delete/{id}', 'FilesController@destroy');
    });

    Route::group(['prefix' => 'profiler'], function () {
        Route::get('/', 'ProfilerController@index');
        Route::get('by/{id}', 'ProfilerController@getBy');
        Route::post('create', 'ProfilerController@create');
        Route::post('update', 'ProfilerController@update');
        Route::delete('delete/{id}', 'ProfilerController@destroy');
    });


    Route::group(['prefix' => 'role'], function () {
        Route::get('/', 'RoleController@index');
        Route::get('by/{id}', 'RoleController@getBy');
        Route::post('create', 'RoleController@create');
        Route::post('update', 'RoleController@update');
        Route::delete('delete/{id}', 'RoleController@destroy');
    });

    Route::group(['prefix' => 'tariff'], function () {
        Route::get('/', 'TariffController@index');
        Route::get('by/{id}', 'TariffController@getBy');
        Route::post('create', 'TariffController@create');
        Route::post('update', 'TariffController@update');
        Route::delete('delete/{id}', 'TariffController@destroy');
    });

    Route::group(['prefix' => 'task'], function () {
        Route::get('/', 'TasksController@index');
        Route::get('by/{id}', 'TasksController@getBy');
        Route::post('create', 'TasksController@create');
        Route::post('update', 'TasksController@update');
        Route::delete('delete/{id}', 'TasksController@destroy');
    });

    Route::group(['prefix' => 'task-status'], function () {
        Route::get('/', 'TaskStatusController@index');
        Route::get('by/{id}', 'TaskStatusController@getBy');
        Route::post('create', 'TaskStatusController@create');
        Route::post('update', 'TaskStatusController@update');
        Route::delete('delete/{id}', 'TaskStatusController@destroy');
    });


});





