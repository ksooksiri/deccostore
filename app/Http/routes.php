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

//Route::get('/', 'WelcomeController@index');

Route::get('products', 'WelcomeController@products');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/admin', 'admin\HomeController@home');
Route::get('/admin/index', 'admin\IndexController@index');
Route::get('/admin/index/create', 'admin\IndexController@create');
Route::post('/admin/index/create', 'admin\IndexController@create');
Route::get('/admin/about-us', 'admin\AboutUsController@index');



// register
Route::get('/admin/authenticate/register', 'admin\Authenticate\AuthenticateController@getRegister');
Route::post('/admin/authenticate/register', 'admin\Authenticate\AuthenticateController@postRegister');


//authentication
Route::get('/admin/authenticate/login', 'admin\Authenticate\AuthenticateController@getLogin');
Route::post('/admin/authenticate/login', 'admin\Authenticate\AuthenticateController@postLogin');
Route::get('/admin/logout', 'admin\AuthenticateController@logout');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::get('products', 'ProductController');
