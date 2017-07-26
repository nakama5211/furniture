<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page.home');
});

//Page route
Route::get('home',[
	'as'=>'home',
	'uses'=>'PageController@getHome']);
Route::get('product',[
	'as'=>'product',
	'uses'=>'PageController@getProduct']);
Route::get('detail',[
	'as'=>'detail',
	'uses'=>'PageController@getDetail']);
Route::get('login',[
	'as'=>'login',
	'uses'=>'PageController@getLogin']);
Route::get('register',[
	'as'=>'register',
	'uses'=>'PageController@getRegister']);
Route::get('checkout',[
	'as'=>'checkout',
	'uses'=>'PageController@getCheckout']);
Route::get('contact',[
	'as'=>'contact',
	'uses'=>'PageController@getContact']);


//Product route
Route::get('type/{id}',
	['as'=>'type',
	 'uses'=>'ProductController@getProductByType']);
Route::get('detail/{id}',
	['as'=>'detail',
	 'uses'=>'ProductController@getDetail']);


//Cart route
Route::get('add-to-cart/{id}',
	['as'=>'add-to-cart',
	 'uses'=>'CartController@addToCart']); 
Route::get('show-cart',
	['as'=>'show-cart',
	 'uses'=>'CartController@showCart']); 
Route::get('rise-to-qty/{id}',
	['as'=>'rise-to-qty',
	 'uses'=>'CartController@riseByOne']); 
Route::get('reduce-to-qty/{id}',
	['as'=>'reduce-to-qty',
	 'uses'=>'CartController@reduceByOne']); 
Route::get('remove-to-item/{id}',
	['as'=>'remove-to-item',
	 'uses'=>'CartController@deleteItemCart']); 