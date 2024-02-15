<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = User::all();

        return view('welcome', ['users' => $users]);
    }
    public function createUser(Request $request)
    {


        $file = $request->file('image_url');
        $path = Storage::putFile('public/images', $file);

        $users = new User;
        $users->name = $request->name;
        $users->image_url = $path;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect('/');
    }
}
