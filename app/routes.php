<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('data1');
});

Route::get('data2', function(){	return View::make('data2'); });
Route::get('data3', function(){	return View::make('data3'); });
Route::get('pd', function(){	return View::make('pd'); });
Route::get('dataview', function(){	return View::make('view'); });