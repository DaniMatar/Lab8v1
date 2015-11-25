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

Route::get('/', 'WelcomeController@index');

Route::get('contact', 'PagesController@contact');


Route::get('login', 'PagesController@login');


Route::get('register', 'PagesController@register');



Route::get('articles', 'PagesController@articles');


Route::get('articles/create', 'PagesController@create');


Route::get('articles/{id}', 'PagesController@show');

Route::post('articles', 'PagesController@store');








Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
