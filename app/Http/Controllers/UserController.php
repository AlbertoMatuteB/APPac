<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Regresa la vista con la tabla que contiene a todos los usuarios.
     *
     * @param  
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = collect(DB::table('users')->get());

        $result = [];

        foreach($users as $user){

            $UserArray =[
                "id" => $user->id,
                "name" => $user->name,
                "last_name" => $user->last_name,
                "email" => $user->email,  
            ]; 

            $result[$user->id] = $UserArray;
        }

        return view('usuarios.consultarUsuarios', [
            'usuarios' => $result
        ]);
    }

        /**
     * Regresa la vista con la tabla que contiene a todos los usuarios.
     *
     * @param  
     * @return \Illuminate\View\View
     */
    public function getUser(int $id)
    {
        $user = DB::table('users')->find($id);

        

        $UserArray =[
            "id" => $user->id,
            "name" => $user->name,
            "last_name" => $user->last_name,
            "email" => $user->email,  
        ]; 

        return view('usuarios.consultarUsuario', [
            'usuario' => $UserArray
        ]);
    }
}
