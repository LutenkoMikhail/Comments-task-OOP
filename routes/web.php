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

Route::get('/', 'HomeController@index')->name('home.start');
Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/post/{post}', 'PostController@show')->name('post.show');

Route::get('/post/comment/create/{post}', 'CommentController@create')->name('comment.create');
Route::post('/post/comment/store/', 'CommentController@store')->name('comment.store');
