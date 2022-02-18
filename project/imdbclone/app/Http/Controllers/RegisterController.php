<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Validation\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        // create the user
        $attributes = request()->validate([

            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',

        ]);

        // create the user
        $user = User::create($attributes);

        // log the user in
        // auth()->login($user);
        $user->save();

        session()->flash('success', 'your account has been created.');

        return redirect('login')->with('success', 'Your account has been created.');
    }
}
