<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show Registration Form
    public function create() {
        return view('auth.register');
    }

    //Create New User
    public function store() {

    }
}
