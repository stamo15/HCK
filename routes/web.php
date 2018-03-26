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

Route::get('/', 'PagesController@index');
Route::get('/index-3', 'PagesController@index2');
Route::get('/index-2', 'PagesController@index3');
Route::get('/about', 'PagesController@about');
Route::get('/blog-details', 'PagesController@blogDetails');
Route::get('/blog-large', 'PagesController@blogLarge');
Route::get('/causes', 'PagesController@causes');
Route::get('/contact', 'PagesController@contact');
Route::get('/error', 'PagesController@error');
Route::get('/event-details', 'PagesController@eventDetails');
Route::get('/event', 'PagesController@event');
Route::get('/shop-single', 'PagesController@shopSingle');
Route::get('/shop', 'PagesController@shop');
Route::get('/single-cause', 'PagesController@singleCause');


