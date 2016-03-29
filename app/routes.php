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
	return View::make('layout.content');
});

Route::get('/clients', 'ClientsController@index');
Route::get('clients/{id}/edit', 'ClientsController@edit');
View::name('layout.content', 'layout');
$layout = View::of('layout');
Route::get('/calculoCuotas', function(){
	$layout->content = View::make('clients.index') 
});