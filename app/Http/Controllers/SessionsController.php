<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function store()
    {
        //athenticate and login the user based on the provided credentials
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('message', 'Welcome' .' '. auth()->user()->name .' '. 'you looney you!');
        }

        //authentication fail
        return back()->withErrors(['email' => 'Sorry You are not a Looney in this bin, please come back with matching credentials.']);
   
    }

    public function destroy()
    {
        //ddd('log the user out');
        auth()->logout();

        return redirect('/')->with('message', 'You have escaped the Looney bin! and that is all folks!');
    }
}
