<?php

namespace App\Posts;

use Carbon\Carbon;

class PostPublishDate
{
    public static function parse(array $request)
    {
        return self::getValidDate($request['url']);
    }


    public static function getValidDate($url)
    {
        $url = trim($url, '/');

        $url = str_replace('https://newthirtythree.com/', '', $url);

        $explodedUrl = explode('/', $url);

        $slug = array_pop($explodedUrl);

        return Carbon::createFromFormat('Y-m', implode('-', $explodedUrl));
    }

}
