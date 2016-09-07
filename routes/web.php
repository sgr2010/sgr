<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome.twig');
});

Route::group( [ 'namespace' => 'web' ], function()
{
	Route::group([ 'namespace' => 'harmoney' ], function()
	{
		Route::group([ 'prefix' => 'harmoney' ], function()
		{
			Route::get( 'index', 'homeController@index' );
			route::post( 'index', 'homeController@index' );
			route::post( 'contactus', 'homeController@contactus' );
			route::get( 'contactus', 'homeController@contactus' );
		});
	});

	Route::group([ 'namespace' => 'Mohini' ], function()
	{
		Route::group([ 'prefix' => 'mohini' ], function()
		{
			Route::get( 'index', 'homeController@index' );
			route::post( 'index', 'homeController@index' );
			route::post( 'user/register', 'userController@register' );
			route::get( 'user/register', 'userController@register' );
		});
	});
});