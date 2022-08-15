<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        // $authors = Author::inRandomOrder()->limit(5)->get();
        // return view('pages.authors')->with("authors", $authors)->paginate(5)->onEachSide(0);
        return view('pages.authors',$authors = [
            'authors' => User::orderBy('updated_at','desc')->paginate(5)->onEachSide(0)
        ]);
    }

    public function show($id)
    {   
        $author = User::find($id);
        $stories = $author->stories;
        return view('pages.author')->with("author",$author)->with('stories', $stories);
    }

}

