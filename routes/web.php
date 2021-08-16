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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::resource('user', 'UserController')->only(['show', 'update', 'edit']);
Route::resource('posts', 'PostController');
Route::get('posts/tag/{id}', 'PostTagController@index')->name('post-tags.index');
Route::resource('post.comment', 'PostCommentController')->only(['store']);
Route::resource('user.comment', 'UserCommentController')->only(['store']);
Route::get('about-us', 'HomeController@about')->name('about');
Route::get('contact-us', 'HomeController@contact')->name('contact');
Route::get('test', 'PostController@testMail')->name('test-mail');
