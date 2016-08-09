<?php

namespace App\Providers;

use GuzzleHttp\Client;
use App\Messages\TwitterPublisher;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerTwitterProvider();
    }

    private function registerTwitterProvider()
    {
        $this->app->bind('App\Messages\TwitterPublisher', function($app){

            $stack = HandlerStack::create();

            $middleware = new Oauth1([
                'consumer_key'    => env('TWITTER_CONSUMER_KEY'),
                'consumer_secret' => env('TWITTER_CONSUMER_SECRET'),
                'token'           => env('TWITTER_ACCESS_TOKEN'),
                'token_secret'    => env('TWITTER_ACCESS_TOKEN_SECRET')
            ]);

            $stack->push($middleware);

            $guzzle = new Client([
                'handler' => $stack,
                'auth' => 'oauth'
                ]);

            return new TwitterPublisher($guzzle);

        });
    }
}
