<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Story;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::inRandomOrder()->limit(5)->get();
        return view('pages.authors')->with("authors", $authors);
    }

    public function show($id)
    {   
        $author = Author::find($id);
        $stories = $author->showstories;
        return view('pages.author')->with("author",$author)->with('stories', $stories);
    }

}

