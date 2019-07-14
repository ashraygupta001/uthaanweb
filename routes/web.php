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
Route::get('/admin/eventlist','EventsController@index');

// Backend side

//Auth
Auth::routes(['register' => false,'verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','PagesController@admin');
Route::get('admin/interview','InterviewsController@create');
Route::post('admin/interview','InterviewsController@store');
Route::get('admin/article','ArticlesController@create');
Route::post('admin/article','ArticlesController@store');
Route::get('admin/show','ShowsController@create');
Route::post('admin/show','ShowsController@store');
Route::get('admin/event','EventsController@create');
Route::post('admin/event','EventsController@store');

Route::get('admin/messages','MessagesController@index');

Route::post('/','MessagesController@store');

Route::get('/admin/interviewedit/{id}','InterviewsController@edit');
Route::patch('/admin/interviewedit/{id}','InterviewsController@update');
Route::get('/admin/interviewdelete/{id}','InterviewsController@destroy');

Route::get('/admin/articleedit/{id}','ArticlesController@edit');
Route::patch('/admin/articleedit/{id}','ArticlesController@update');
Route::get('/admin/articledelete/{id}','ArticlesController@destroy');

Route::get('/admin/messagedelete/{id}','MessagesController@destroy');

Route::get('/admin/showedit/{id}','ShowsController@edit');
Route::patch('/admin/showedit/{id}','ShowsController@update');
Route::get('/admin/showdelete/{id}','ShowsController@destroy');

Route::get('/admin/eventedit/{id}','EventsController@edit');
Route::patch('/admin/eventedit/{id}','EventsController@update');
Route::get('/admin/eventdelete/{id}','EventsController@destroy');



