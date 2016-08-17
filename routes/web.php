<?php
Route::group(['middleware' => 'auth'], function () {


    /**
     * All Routes for the Reposter / Messenger site
     */
    Route::group(['domain' => env('DOMAIN_REPOSTER'), 'namespace' => 'Messenger'], function () {

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

    });

});

Auth::routes();

Route::get('/home', 'HomeController@index');
