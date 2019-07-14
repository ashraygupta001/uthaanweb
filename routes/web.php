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
// Front end side

Route::get('/','PagesController@welcome');
Route::get('/about','PagesController@about');
Route::get('/gallery','PagesController@gallery');
Route::get('/shows','ShowsController@index');
Route::get('/player/{id}','ShowsController@show');
Route::get('/interview','InterviewsController@index');
Route::get('/interview/{id}','InterviewsController@show');
Route::get('/article','ArticlesController@index');
Route::get('/article/{id}','ArticlesController@show');

// Backend side

//Auth
Auth::routes(['register' => false,'verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','PagesController@admin');
Route::get('admin/interview','InterviewsController@create');
Route::post('admin/interview','InterviewsController@store');