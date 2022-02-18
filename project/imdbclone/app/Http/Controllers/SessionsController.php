<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
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
        // based on the provided credentials
        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' =>  'Your provided credentials could not be verified.'


                // {
                //     if (auth()->guest()) {
                //         abort(Response::HTTP_FORBIDDEN);
                //     }

                //     if (auth()->user()->username !== 'NaeliaSalas') {
                //         abort(Response::HTTP_FORBIDDEN);
                //     }
                //     return view('posts.create');
                // }
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()

    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
