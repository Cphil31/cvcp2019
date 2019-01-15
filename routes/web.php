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

Route::get('/', "PagesController@index");
Route::get('/competences', "PagesController@competences");
Route::get('/experiences', "PagesController@experiences");
Route::get('/formations', "PagesController@formations");
Route::get('/loisirs', "PagesController@loisirs");
Route::get('/contact', "PagesController@contact");
