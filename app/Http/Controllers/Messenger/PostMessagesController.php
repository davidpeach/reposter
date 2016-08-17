<?php

namespace App\Http\Controllers\Messenger;

use App\Post;
use App\Message;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Messages\MessageBuilder;
use App\Http\Controllers\Controller;

class PostMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($postId)
    {
        $post = Post::find($postId);

        $intervals = [
            'Weeks_1' => '1 Week',
            'Months_1' => '1 Month',
            'Months_6' => '6 Months',
            'Months_10' => '10 Months',
            'Months_15' => '15 Months',
            'Months_20' => '20 Months',
            'Months_25' => '25 Months',
            'Months_30' => '30 Months',
            'Months_36' => '36 Months',
            'Years_4' => '4 Years',
            'Years_5' => '5 Years',
            'Years_6' => '6 Years',
        ];

        return view('messages.index', compact('post', 'intervals'));
    }

}
