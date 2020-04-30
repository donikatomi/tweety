<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::latest()->get();
        return view('tweets.index')->with('tweets', auth()->user()->timeline());
    }

    public function store()
    {
        $atributes = request()->validate(['body' => 'required|max:255']);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $atributes['body']
        ]);

        return redirect()->route('home');
    }
}
