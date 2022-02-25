<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        // return view('admin.index', [
        // 'users' => User::paginate(3)

        $users = User::get();
        // var_dump($users);
        return view('admin.index', ['users' => $users]);
    }

    //create, behövs det?

    //edit update
    public function edit(User $id)
    {

        $users = User::find($id);

        return view('admin.edit', ['users' => $users]);
    }

    public function update(Request $request, User $id)
    {
        $request->validate([
            'name' => 'string|required|max:255',
            'email' => 'required|email',
            'username' => 'string|required|max:255',
            'password' => 'string|required|max:255',


        ]);

        $users = User::find($id);
        $users->name = $request->name;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->update();

        return redirect('admin.users')->with('status', 'The user has been updated!');
    }

    //delete
    public function destroy(User $id)
    {
        //if(User::where('id', $id)->exists()){
        $users = User::find($id);
        $users->delete();

        return redirect()->back()->with('status', 'The user has been deleted!');
        // }
    }
}





// 1. update form skickas till form
// 2. add form
// 3. delete 
// foreach loopa