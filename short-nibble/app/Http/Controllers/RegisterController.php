<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('pages/register');
    }
    
    public function store() 
    {
     $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3',
            'email' => 'required|email|max:255',
            'password' => 'required|max:255|min:7'
        ]);

        //dd('congratulations you are a looney');

      User::create($attributes);

      return redirect('/');
        
    }
}
