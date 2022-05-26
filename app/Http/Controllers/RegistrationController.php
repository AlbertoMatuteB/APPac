<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;
use Hash;
class RegistrationController extends Controller
{
    public function create(){
        return view('auth.createUser');
    }

    public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'last_name' => 'required',
            'role_id' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            
        ]);
       
        $user = User::create(request(['name','last_name','role_id', 'email', 'password']));
       
        return redirect('/usuarios')->with('alert','Perfil Creado');
    }
}
