<?php
Route::group(['middleware' => 'auth'], function () {

    Route::resource('posts', 'PostsController');

    Route::resource('messages', 'MessagesController');

    Route::get('posts/{id}/messages', ['as' => 'posts.messages.index', 'uses' => 'PostMessagesController@index']);

    Route::get('/', function () {
        return redirect()->route('posts.create');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index');
