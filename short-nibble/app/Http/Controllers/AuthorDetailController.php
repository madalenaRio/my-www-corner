<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorDetailController extends Controller
{
    public function show()
    {
        return view('pages/authorDetail');
    }
}
