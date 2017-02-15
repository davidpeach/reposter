<?php

namespace App\Http\Controllers\Front;

use App\Tweets\Tweet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Tweet::limit(20)->orderBy('timestamp', 'desc')->paginate(30);

        return view('front.notes.index', compact('notes'));
    }
}
