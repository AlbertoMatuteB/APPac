<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class UserController extends Controller
{
    //Show Registration Form
    public function create() {
        return view('auth.register');
    }

    //Create New User
    public function store(Request $request) {
        echo 'console.log(It works)';
        request()->validate([
            'name' => 'required',
            'last_name' => 'required',
            'role_id' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create(request(['name', 'last_name', 'role_id', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/');
    }
}
