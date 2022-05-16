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
                "role" => DB::table('roles')->where('id', $user->role_id)->value('name')
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
            "role" => DB::table('roles')->where('id', $user->role_id)->value('name')  
        ]; 

        return view('usuarios.consultarUsuario', [
            'usuario' => $UserArray
        ]);
    }
    public function getUserByRol(Request $request)
    {
        $users = collect(DB::table('users')->where('role_id',$request->rol)->get());

        $result = [];

        foreach($users as $user){

            $UserArray =[
                "id" => $user->id,
                "name" => $user->name,
                "last_name" => $user->last_name,
                "email" => $user->email,
                "role" => DB::table('roles')->where('id', $user->role_id)->value('name')
            ]; 

            $result[$user->id] = $UserArray;
        }

     

        return view('usuarios.consultarUsuarios', [
            'usuarios' => $result
        ]);
    }

            /**
     * Elimina al usuario con el id identificado y regresa la vista de consultar usuarios.
     *
     * @param  int $id
     * @return \Illuminate\View\View
     */
    public function delete(int $id){
        $deleted = DB::table('users')->where('id', '=', $id)->delete();
        return $this->index();
    }
}
