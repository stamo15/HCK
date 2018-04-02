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

Route::get('/', 'PagesController@index') -> name('index');
Route::get('/index-3', 'PagesController@index2') -> name('index-2');
Route::get('/index-2', 'PagesController@index3') -> name('index-3');
Route::get('/about', 'PagesController@about') -> name('about');
Route::get('/blog-details', 'PagesController@blogDetails') -> name('blog-details');
Route::get('/blog-large', 'PagesController@blogLarge') -> name('blog-large');
Route::get('/mission', 'PagesController@mission') -> name('mission');
Route::get('/contact', 'PagesController@contact') -> name('contact');
Route::get('/get-involved', 'PagesController@getInvolved') -> name('get-involved');
Route::get('/error', 'PagesController@error') -> name('error');
Route::get('/event-details', 'PagesController@eventDetails') -> name('event-details');
Route::get('/event', 'PagesController@event') -> name('event');
Route::get('/shop-single', 'PagesController@shopSingle') -> name('shop-single');
Route::get('/shop', 'PagesController@shop') -> name('shop');
Route::get('/single-cause', 'PagesController@singleCause') -> name('single-cause');


