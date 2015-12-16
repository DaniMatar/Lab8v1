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


Route::get('adminlogin',['middleware' => 'admincheck', function(){


    return view('pages.adminlogin');

}]);



Route::get('webpages', [
    'middleware' => 'admincheck',
    'uses' => 'WebpagesController@index'
]);

Route::get('articles', ['uses' => 'ArticleController@index']);
Route::get('articles/destroy', ['uses' => 'ArticleController@destroy']);
Route::get('articles/{article}', ['uses' => 'ArticleController@show']);


Route::get('areas', [
    'middleware' => 'admincheck',
    'uses' => 'AreasController@index'
]);

Route::get('cssTemplate', [
    'middleware' => 'admincheck',
    'uses' => 'CSSController@index'
]);



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



//Route::get('foo/{bar}', function() );

