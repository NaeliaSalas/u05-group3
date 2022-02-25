<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

        $users = User::get();
        return view('admin.index', ['users' => $users]);
    }


    //edit update
    public function edit($id)
    {

        $users = User::find($id);
        return view('admin.edit', ['users' => $users]);
    }

    public function update(Request $request, $id)

    {

        $request->validate([
            'name' => 'string|required|max:255',
            'email' => 'required|email|',
            'username' => 'string|required|max:255',

        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->update();

        return redirect('/admin/index')->with('status', 'The user has been updated!');
    }

    //delete
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return back()->with('status', 'The user has been deleted!');
    }
}
