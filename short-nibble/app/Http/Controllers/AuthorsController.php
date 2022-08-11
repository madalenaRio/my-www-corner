<?php

namespace App\Http\Controllers;

use App\Models\Author;
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
    return view('pages.author')->with("author",$author);
}

}

