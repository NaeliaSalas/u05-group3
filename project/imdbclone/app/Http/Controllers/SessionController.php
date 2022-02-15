<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class SessionController extends Controller
{


    public function create()
    {
        return view('sessions.create');
    }

    public function store()

    {
        //validate the request

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);

        // attempt to auth and log in the user
        // based on the provided cfredentials
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome Back!');
        }

        //auth failed.

        throw ValidationException::withMessages([
            'email' =>  'Your provided credentials could not be verified.'

        ]);
    }
    public function destroy()

    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
