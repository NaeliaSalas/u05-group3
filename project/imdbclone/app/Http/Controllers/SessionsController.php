<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
            ]);
        }

        session()->regenerate();

        if (Auth::user()?->IsAdmin == true) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/')->with('success', 'Welcome Back!');
        }
    }


    public function destroy()

    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    public function adminlogin()
    {

        return view('admin.dashboard');
    }
}
