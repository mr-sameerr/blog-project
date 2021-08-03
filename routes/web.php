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

Route::resource('user', 'UserController')->only(['show', 'update', 'delete']);
Route::resource('posts', 'PostController');
Route::get('about-us', 'HomeController@about')->name('about');
Route::get('contact-us', 'HomeController@contact')->name('contact');
Route::get('posts/tag/{id}', 'PostTagController@index')->name('post-tags.index');
