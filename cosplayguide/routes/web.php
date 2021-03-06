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
Route::get('/logout', 'PagesController@home');


Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');

Route::get('/over-cosplay', 'PagesController@about');
Route::get('/tips-en-tricks', 'PagesController@tips');
Route::get('/tips-en-tricks/worbla-en-foam', 'PagesController@worbla');
Route::get('/tips-en-tricks/10-beginner-tips', 'PagesController@beginnertips');
Route::get('/tips-en-tricks/cosplayplanner', 'PagesController@cosplayplanner');
Route::get('/contact', 'PagesController@contact');
Route::get('/contact/sendmail', 'PagesController@contact');
Route::post('/contact/sendmail', 'PagesController@sendEmail')->name('send_mail');

Route::get('/profiel', 'CosplayController@index')->name('profile');
Route::get('/profiel/edit', 'UserController@edit');
Route::post('/profiel', 'UserController@update');

Route::get('/profiel/nieuwe-cosplay', 'CosplayController@create');
Route::post('/profiel/nieuwe-cosplay', 'CosplayController@store');
Route::post('/profiel/cosplay-overzicht/{id}', 'CosplayphotoController@store');

Route::get('/profiel/cosplay-overzicht/grime', 'PagesController@grime');
Route::get('/profiel/cosplay-overzicht/lenzen', 'PagesController@lenzen');
Route::get('/profiel/cosplay-overzicht/pruiken', 'PagesController@pruiken');
Route::get('/profiel/cosplay-overzicht/armor', 'PagesController@armor');
Route::get('/profiel/cosplay-overzicht/voorwerpen', 'PagesController@voorwerpen');
Route::get('/profiel/cosplay-overzicht/stoffen', 'PagesController@stoffen');
Route::get('/profiel/cosplay-overzicht/change-status/{id}/{status}', 'CosplayController@change_status');
Route::get('/profiel/cosplay-overzicht/{id}/{slug?}', 'CosplayController@show_progress')->name('show_progress');
Route::get('/profiel/delete/{id}', 'CosplayphotoController@delete');




Route::get('/profiel/cosplay-info/{id}/{slug?}', 'CosplayController@edit')->name('cosplay_edit');
Route::post('/profiel/cosplay-info/update/{id}', 'CosplayController@update');
Route::get('/cosplays/{id}/{slug?}', 'CosplayController@show')->name('show_cosplay_outsider');
Route::get('/profiel/cosplays/delete/{id}', 'CosplayController@destroy');
Route::get('/profiel/cosplays/{id}/{slug?}', 'CosplayController@show')->name('show_cosplay');
