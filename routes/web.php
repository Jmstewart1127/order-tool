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

Auth::routes();

Route::get('/', 'OrdersController@create');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('orders', 'OrdersController');

Route::get('/orders/show', 'OrdersController@show');

Route::get('/my/orders/show', 'OrdersController@showByUserId');

Route::post('/orders/store', 'OrdersController@store');

Route::get('/admin/orders/show', 'OrdersController@adminShow');

Route::get('/admin/orders/show/{id}', 'OrdersController@ShowUserDetailsAndOrderForAdmin');

Route::post('orders/complete/{id}', 'OrdersController@complete');

Route::resource('nonuserorders', 'NonUserOrdersController');

