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

Route::get('/test', function() {
    $array = ['Anna', 'Tom', 'Susi'];
    $leereArray =[];
    return view('test.hello', compact('array','leereArray'));
});

Route::get('/testcontroller', 'testController@home');

Route::get('/projekte', 'ProjectController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/anlegen', 'ProjectController@create');

Route::post('/projekte', 'ProjectController@store');

Route::get('/projekte/{id}', 'ProjectController@show');