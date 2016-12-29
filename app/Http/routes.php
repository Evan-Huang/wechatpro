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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/backend/login', ['uses' => 'Backend\AuthController@login']);
Route::post('/backend/login', ['uses' => 'Backend\AuthController@postLogin']);
Route::get('/backend/logout', ['uses' => 'Backend\AuthController@logout']);

Route::get('/indexover','Frontend\IndexController@indexover');
Route::get('/terms','Frontend\IndexController@terms');

Route::group(['middleware' => ['activity.over']], function () {

    Route::any('/','Frontend\IndexController@index');

    Route::get('/result','Frontend\IndexController@result');
});


Route::group(['middleware' => ['auth.backend'], 'prefix' => 'backend'], function() {

    Route::get('/', ['uses' => 'Backend\HomeController@index', 'as' => 'backend.home.index']);

    Route::get('/report/export', 'Backend\ReportController@export');
    Route::resource('/report', 'Backend\ReportController');

    Route::resource('/user', 'Backend\UserController');
});



