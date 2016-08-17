<?php

/**
 * All Routes for the Reposter / Messenger site
 */
Route::group(['domain' => env('DOMAIN_REPOSTER'), 'namespace' => 'Messenger', 'middleware' => 'auth'], function () {

    Route::resource('posts', 'PostsController');

    Route::resource('messages', 'MessagesController');

    Route::get('posts/{id}/messages', ['as' => 'posts.messages.index', 'uses' => 'PostMessagesController@index']);

    Route::get('/', function () {
        return redirect()->route('posts.create');
    });

});



/**
 * All Routes for the Music tracker site
 */
Route::group(['domain' => env('DOMAIN_MUSIC_TRACKER')], function () {

    Route::get('/', function(){
        return "test works";
    });


    Route::group(['middleware' => 'auth'], function () {
        //
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index');
