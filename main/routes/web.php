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

Route::get('/','HomeController@index');

Auth::routes();



Route::get('/dashboard', 'DashController@index')->name('dash.index');

Route::post('/news/store', 'NewsController@store')->name('news.store');

Route::put('/news/update/{id}', 'NewsController@update')->name('news.update');

Route::put('/news/headline/{id}', 'NewsController@headline')->name('news.headline');

Route::DELETE('/news/delete/{id}', 'NewsController@delete')->name('news.delete');

Route::post('product/{cat}/store', 'ProductController@store')->name('product.store');

Route::put('/product/update/{id}', 'ProductController@update')->name('product.update');

Route::DELETE('/product/delete/{id}', 'ProductController@destroy')->name('product.delete');



Route::get('/get/news/{id}', 'NewsController@getById');
Route::get('/get/products/{cat}', 'ProductController@getByCat');


Route::get('/tentang', 'HomeController@tentang');
Route::get('/berita', 'HomeController@berita');
