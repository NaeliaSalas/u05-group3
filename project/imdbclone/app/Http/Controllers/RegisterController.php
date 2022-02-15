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

        $attributes = request()->validate([

            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);


        $user = User::create($attributes);

        // log the user in

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
