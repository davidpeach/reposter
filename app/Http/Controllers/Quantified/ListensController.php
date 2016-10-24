<?php

namespace App\Http\Controllers\Quantified;

use App\Music\Listen;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListensController extends Controller
{
    public function index()
    {
        $listens = Listen::with('song.album.artist')->orderBy('listened_at', 'desc')->paginate(env('PAGINATION_POSTS_PER_PAGE', 5));

        return view('listens.index', compact('listens'));
    }
}
