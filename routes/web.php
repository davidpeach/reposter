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








//Route::group(['domain' => env('DOMAIN_QUANTIFIED'), 'namespace' => 'Quantified'], function () {

    Route::group(['prefix' => 'messenger', 'namespace' => 'Messenger'], function () {
    
        Route::resource('posts', 'PostsController');

        Route::resource('messages', 'MessagesController');

        Route::get('posts/{id}/messages', ['as' => 'posts.messages.index', 'uses' => 'PostMessagesController@index']);

        Route::get('/', function () {
            return redirect()->route('posts.create');
        });

    });

    Route::get('/', function () {
        return view('dashboard');
    });

//});








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
