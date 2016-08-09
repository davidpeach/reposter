<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'auth'], function () {

    Route::get('testbuild', 'PostMessagesController@testSend');

    Route::resource('posts', 'PostsController');

    Route::resource('messages', 'MessagesController');

    Route::get('posts/{id}/messages', ['as' => 'posts.messages.index', 'uses' => 'PostMessagesController@index']);

    Route::get('/', function () {
        return redirect()->route('posts.create');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index');
