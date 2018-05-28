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

Route::get('/', 'PagesController@home');
Route::get('home', 'PagesController@home');

Route::get('about-cosplay', 'PagesController@about');

Route::get('tips-and-tricks', 'PagesController@tips');
Route::get('tips-and-tricks/worbla-and-foam', 'PagesController@worbla');
Route::get('tips-and-tricks/10-beginner-tips', 'PagesController@beginnertips');
Route::get('tips-and-tricks/cosplayplanner', 'PagesController@cosplayplanner');

Route::get('contact', 'PagesController@contact');

Route::get('your-profile', 'CosplayController@index');
Route::get('your-profile/create-cosplay', 'CosplayController@create');
