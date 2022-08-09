<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryDetailcontroller extends Controller
{
    public function show()
    {
        return view('pages/storyDetail');
    }
}
