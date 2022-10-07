<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function showAbout()
    {
        return view('pages/about');
    }

    public function showRandom()
    {
        return view('pages/random');
    }

    public function showSkills()
    {
        return view('pages/skills');
    }

}
