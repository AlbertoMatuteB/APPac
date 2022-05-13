<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'requiered',
            'last_name' => 'requiered',
            'role_id' => 'requiered',
            'email' => 'requiered | email',
            'password' => 'requiered',
        ]);

        /*User::create(request([
            'name'=> $request -> name,
            'last_name' => $request -> last_name,
            'role_id' => $request -> role_id,
            'email' => $request -> email,
            'password' => Hash::make($request->password),
        ]));*/


        DB::table('users')->insert([
            'name'=> $request -> name,
            'last_name' => $request -> last_name,
            'role_id' => $request -> role_id,
            'email' => $request -> email,
            'password' => Hash::make($request->password)
        ]);

        return view('home');

    }


}




