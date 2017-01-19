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

Route::get('/', array('uses' =>'HomeController@cusIndex', 'as' => 'cusIndex'));


Route::group(array('prefix' => '/admin'),function()
{
	Route::get('/', array('uses' =>'HomeController@index', 'as' => 'home'));

	Route::group(array('prefix' => '/product'),function()
	{
		Route::get('/', array('uses' => 'ProductController@index','as' => 'getProduct'));
		Route::get('/getProductInfo', array('uses' => 'ProductController@getProductInfo', 'as' => 'getProductInfo'));
		Route::group(array('before' => 'csrf'), function()
		{
			Route::post('/post_product',array('uses' => 'ProductController@addProduct', 'as' => 'addProduct')); 
			Route::post('/update_product',array('uses' => 'ProductController@updateProduct', 'as' => 'updateProduct')); 
			Route::post('/post_addPrice', array('uses' => 'ProductController@addPrice', 'as' => 'addPrice'));
		});

	});
	
	Route::group(array('before' => 'guest'), function()
	{
		Route::get('/login',array('uses' =>'UserController@getLogin', 'as' => 'getLogin'));
		Route::get('/register',array('uses' =>'UserController@getRegister', 'as' => 'getRegister'));
		Route::group(array('before' => 'csrf'), function()
		{
			Route::post('/user/login',array('uses' => 'UserController@postLogin', 'as' => 'postLogin')); 
			Route::post('/user/register',array('uses' => 'UserController@postRegister', 'as' => 'postRegister')); 
		});
	});

	Route::group(array('before' => 'auth'), function()
	{
		Route::get('/user/logout', array('uses' => 'UserController@getLogout', 'as' => 'getLogout'));
	});
});


/*Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(array('prefix' => 'product'), function() 
{
	Route::get('/', array('uses' => 'ProductController@index','as' => 'product_view'));
	Route::group(array('before' => 'csrf'), function()
	{
		
	});
});*/
