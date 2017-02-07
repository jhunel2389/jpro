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
Route::get('/category/{name}', array('uses' =>'ProductController@getProductByCategory', 'as' => 'getProductByCategory'));
Route::get('/product/{name}', array('uses' =>'ProductController@getByProduct', 'as' => 'getByProduct'));
Route::get('/contact-us', array('uses' =>'ContactUsController@index', 'as' => 'getContactUs'));
Route::get('/sign-in', array('uses' =>'UserController@getCusLogin', 'as' => 'getCusLogin'));
Route::group(array('prefix' => '/admin'),function()
{
	Route::get('/', array('uses' =>'HomeController@index', 'as' => 'home'));

	Route::group(array('before' => 'auth'), function()
	{

		Route::group(array('prefix' => '/product'),function()
		{
			Route::get('/', array('uses' => 'ProductController@index','as' => 'getProduct'));
			Route::get('/getProductInfo', array('uses' => 'ProductController@getProductInfo', 'as' => 'getProductInfo'));
			Route::group(array('before' => 'csrf'), function()
			{
				Route::post('/post_product',array('uses' => 'ProductController@addProduct', 'as' => 'addProduct')); 
				Route::post('/update_product',array('uses' => 'ProductController@updateProduct', 'as' => 'updateProduct')); 
				Route::post('/post_addPrice', array('uses' => 'ProductController@addPrice', 'as' => 'addPrice'));
				Route::post('/img_delete', array('uses' => 'ProductController@deleteImage', 'as' => 'deleteImage'));
			});

		});

		Route::group(array('prefix' => '/category'),function()
		{
			Route::get('/', array('uses' => 'ProductController@category','as' => 'getCategory'));
			Route::get('/getCategoryInfo', array('uses' => 'ProductController@getCategoryInfo', 'as' => 'getCategoryInfo'));
			Route::group(array('before' => 'csrf'), function()
			{
				Route::post('/post_category',array('uses' => 'ProductController@addCategory', 'as' => 'addCategory')); 
			});

		});

		Route::group(array('prefix' => '/mail'),function()
		{
			Route::get('/', array('uses' => 'MailController@index','as' => 'getMail'));
			Route::get('/read-mail/{type}/{id}', array('uses' => 'MailController@getReadMailView', 'as' => 'getReadMailView'));
			Route::group(array('before' => 'csrf'), function()
			{
				Route::post('/post_message',array('uses' => 'MailController@postMessage', 'as' => 'cs_message')); 
			});

		});
	
		Route::group(array('prefix' => '/uam'),function()
		{
			Route::group(array('before' => 'auth'), function()
			{
				Route::get('/getUAL', array('uses' => 'UserController@getUAL', 'as' => 'getUAL','middleware' => 'auth'));
			});
		});
		
		Route::get('/user/logout', array('uses' => 'UserController@getLogout', 'as' => 'getLogout'));
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
