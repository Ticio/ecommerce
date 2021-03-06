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
Route::get('/register_product', 'SessionController@register_product');
Route::get('/buy', 'SessionController@buying_products')->name('buy');
Route::get('/request', 'SessionController@request')->name('request');

//Dashboard Routes
Route::get('dashboard', 'SessionController@dashboard')->name('dashboard');
Route::get('users', 'SessionController@users')->name('dashboard-users');
// Route::get('dashboard', 'SessionController@dashboard')->name('dashboard');


//Route::get('/home', 'SessionController@index');
Route::post('/register_product', 'RegistrationController@register_product')->name('register_product');

///////////////////////////////////////////////////////////////////////////////
//Responsible for adding an item to the cart
Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('cart');
///////////////////////////////////////////////////////////////////////////////

Route::get('/getCart', 'ProductController@getCart')->name('getCart');

Route::post('/postCheckout', "ProductController@postCheckout")->name('postCheckout');

///////////////////////////////////////////////////////////////////////////////////////////
/// 								Responsible for routes                               //
Route::get('/products', "ProductController@all_products")->name('products');
Route::get('/product/{id}', "ProductController@product")->name('product');


Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('removeItem');
Route::get('/reduce/{id}', 'ProductController@getReduceByOne')->name('reduceItem');

////This is the search route
Route::post('basicSearch', 'SearchController@basicSearch');


//Settings
Route::get('user/profile', "SellerController@profile")->name('user/profile');
Route::post('user/update', 'SellerController@profile_update')->name('user/update');;

Route::get('store/{id}', "SellerController@store")->name('store');
Route::get('store/delete/{id}', "SellerController@delete")->name('store/delete');

Route::post('store/update/{id}', 'SellerController@product_update')->name('store/update');;



Auth::routes();