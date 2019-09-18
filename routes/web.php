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
Route::get('/about', 'PagesController@about');
Route::get('/causes', 'PagesController@causes');
Route::get('/donate', 'PagesController@donate');
Route::get('/blog', 'PagesController@blog');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/events', 'PagesController@events');
Route::get('/contacts', 'PagesController@contacts');