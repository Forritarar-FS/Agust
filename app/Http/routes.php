<?php


Route::get('/', 'HomeController@space');
Route::get('registration', 'HomeController@register');
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::get('/autherror', 'HomeController@errorer');
Route::post('articles', 'ArticlesController@store');
Route::post('user', 'HomeController@regisdata');
Route::post('home', 'HomeController@authdata');

Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController'
	]);
