<?php

namespace App\Http\Controllers;

use \App\Models\Story;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function index()
    {
        $stories = Story::where('user_id', auth()->user()->id)
                    ->orderBy('id', 'DESC')
                    ->paginate(5);
        return view('stories.index', compact('stories'));
    }

    public function show(Story $story)
    {
        return view('stories.show', compact('story'));
    }
}
