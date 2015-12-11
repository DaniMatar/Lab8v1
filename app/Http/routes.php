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






Route::get('adminlogin',['middleware' => 'admin', function()
{

    return 'This page ay only be viewed if your Admin';

    //return view('pages.adminlogin');

}]);






Route::resource('articles','ArticleController');


Route::resource('webpages','WebpagesController');

Route::resource('areas','AreasController');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



//Route::get('foo/{bar}', function() );

