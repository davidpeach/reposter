<?php

namespace App\Http\Controllers\Messenger;

use App\Post;
use App\Message;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Messages\MessageScheduler;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('scheduled_for', 'asc')
                            ->whereSent(0)
                            ->where('scheduled_for', '>', Carbon::now())
                            ->get();

        return view('messages.all', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::find($request->post_id);

        if (is_null($post)) {

            $post = new Post;
            $post->id = 0;

            $request->merge([
                'published_at' => new Carbon::createFromFormat('Y-m-d H:i:s', $request->published_at);
                ]);

        }

        $post->messages()->delete();

        foreach ($request->intervals as $interval) {

            with( new MessageScheduler($interval))->for($post)->schedule($request->published_at);

        }

        return redirect(route('posts.messages.index', $request->post_id));
    }


    // shouldnt need this
    public function storeCustomMessage(Request $request)
    {
        // make a message content row
        // make message row linked to the content
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
