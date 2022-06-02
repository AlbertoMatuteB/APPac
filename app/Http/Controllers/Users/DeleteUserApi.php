<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteUserApi extends Controller
{
    public function __invoke($id)
    {
        $user = DB::table('users')->where('id', $id);

        if ($user->delete()) {
            return response('Borrado de manera exitosa');
        } else {
            return response('No se puede borrar el usuario', 400);
        }
    }
}
