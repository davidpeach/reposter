<?php

namespace App\Http\ViewComposers;

use App\Message;
use App\Music\Listen;
use App\Checkins\Checkin;
use Illuminate\Contracts\View\View;

class InfoBoxesViewComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $listenCount = Listen::count();

        $messageCount = Message::whereSent(0)->count();

        $checkinCount = Checkin::count();

        $view->with(compact('listenCount', 'messageCount', 'checkinCount'));
    }
}