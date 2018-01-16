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

Route::get('/', 'SessionController@index')->name('welcome');
Route::get('/home', 'SessionController@home')->name('home');
Route::get('/logout', 'SessionController@logout');
Route::get('register_product', 'SessionController@register_product');
Route::get('buy', 'SessionController@buying_products')->name('buy');
Route::get('request', 'SessionController@request')->name('request');

//Dashboard Routes
Route::get('dashboard', 'SessionController@dashboard')->name('dashboard');
Route::get('users', 'SessionController@users')->name('dashboard-users');
// Route::get('dashboard', 'SessionController@dashboard')->name('dashboard');


//Route::get('/home', 'SessionController@index');
Route::post('register_product', 'RegistrationController@register_product');

///////////////////////////////////////////////////////////////////////////////
//Responsible for adding an item to the cart
Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('cart');
///////////////////////////////////////////////////////////////////////////////

Route::get('getCart', 'ProductController@getCart')->name('getCart');
Route::post('postCheckout', "ProductController@postCheckout")->name('postCheckout');

Route::get('products', "ProductController@all_products")->name('products');
Route::post('forTest', "ProductController@forTest")->name('forTest');


Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('removeItem');

Auth::routes();
