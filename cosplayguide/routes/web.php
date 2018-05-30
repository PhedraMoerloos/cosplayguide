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
Route::get('/home', 'PagesController@home');

Route::get('/over-cosplay', 'PagesController@about');
Route::get('/tips-en-tricks', 'PagesController@tips');
Route::get('/tips-en-tricks/worbla-en-foam', 'PagesController@worbla');
Route::get('/tips-en-tricks/10-beginner-tips', 'PagesController@beginnertips');
Route::get('/tips-en-tricks/cosplayplanner', 'PagesController@cosplayplanner');
Route::get('/contact', 'PagesController@contact');

Route::get('/profiel', 'CosplayController@index');
Route::get('/profiel/edit', 'UserController@edit');
Route::post('/profiel', 'UserController@update');

Route::get('/profiel/nieuwe-cosplay', 'CosplayController@create');
Route::post('/profiel/nieuwe-cosplay', 'CosplayController@store');
Route::post('/profiel/cosplay-overzicht', 'CosplayController@update');

Route::get('/profiel/cosplay-overzicht/grime', 'PagesController@grime');
Route::get('/profiel/cosplay-overzicht/lenzen', 'PagesController@lenzen');
Route::get('/profiel/cosplay-overzicht/pruiken', 'PagesController@pruiken');
Route::get('/profiel/cosplay-overzicht/armor', 'PagesController@armor');
Route::get('/profiel/cosplay-overzicht/voorwerpen', 'PagesController@voorwerpen');
Route::get('/profiel/cosplay-overzicht/stoffen', 'PagesController@stoffen');
Route::get('/profiel/cosplay-overzicht/change-status/{id}/{status}', 'CosplayController@change_status');
Route::get('/profiel/cosplay-overzicht/{id}', 'CosplayController@show_progress');
Route::get('/profiel/delete/{id}', 'CosplayphotoController@delete');



Route::get('/profiel/cosplay-info/{id}', 'CosplayController@edit');
Route::get('/profiel/cosplays/{id}', 'CosplayController@show');
Route::get('/cosplays/{id}', 'CosplayController@show');
