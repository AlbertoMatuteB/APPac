<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

        DB::table('users')->insert([
            'name'=> $request -> name,
            'last_name' => $request -> last_name,
            'role_id' => $request -> role_id,
            'email' => $request -> email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/usuarios')->with('alert','Perfil Creado');

    }

    /**
     * Regresa la vista con la tabla que contiene a todos los usuarios.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = collect(DB::table('users')->get());

        $currentUser = auth()->user()->id;

        $result = [];

        foreach($users as $user){
            
            if($user->id != $currentUser){
                $UserArray =[
                    "id" => $user->id,
                    "name" => $user->name,
                    "last_name" => $user->last_name,
                    "email" => $user->email,
                    "role" => DB::table('roles')->where('id', $user->role_id)->value('name')
                ];
    
                $result[$user->id] = $UserArray;

            }
            
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
    /**
     * Regresa la vista con el formulario para editar usuario
     */
    public function editForm(int $id)
    {
        $user = DB::table('users')->find($id);



        $UserArray =[
            "id" => $user->id,
            "name" => $user->name,
            "last_name" => $user->last_name,
            "email" => $user->email,
            "role" => DB::table('roles')->where('id', $user->role_id)->value('name')
        ];

        return view('usuarios.editarUsuario', [
            'usuario' => $UserArray
        ]);
    }

    /**
     * Funcionalidad para editar usuario
     */
    public function editUser(int $id, Request $request)
    {
        $request->validate([
            'name' =>'required',
            'last_name' => 'required',
            'email'=>'required'
        ]);

        $user = User::find($id);

        $user->update([
            'name'=> $request -> name,
            'last_name' => $request -> last_name,
            'email' => $request -> email,
        ]);

        return redirect('/usuarios')->with('alert','Perfil Actualizado');
    }
}
