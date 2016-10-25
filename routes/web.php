<?php

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'quantified', 'namespace' => 'Quantified'], function () {

        Route::get('/', function() {
            return 'Quantified root.';
        });

        Route::resource('listens', 'ListensController');

    });


    Route::group(['prefix' => 'messenger', 'namespace' => 'Messenger'], function () {

        Route::resource('posts', 'PostsController');

        Route::resource('messages', 'MessagesController');

        Route::post('storeCustomMessage', ['as' => 'messages.storeCustomMessage', 'uses' => 'MessagesController@storeCustomMessage']);

        Route::get('posts/{id}/messages', ['as' => 'posts.messages.index', 'uses' => 'PostMessagesController@index']);

        Route::get('/', function () {
            return redirect()->route('posts.create');
        });

    });

    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('mailtest', function () {

        Mail::send('emails.daily-summary', [], function ($m) {
            $m->from('hello@app.com', 'Your Application');

            $m->to('mail@davidpeach.co.uk', 'Davidov')->subject('Your Reminder TESTTTTT moose');
        });

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
