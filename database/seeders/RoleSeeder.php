<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
        [
            'id' => '1',
            'name' => 'Administrador',
            'description' => 'Rol de administrador',
        ],
        [
            'id' => '2',
            'name' => 'Usuario',
            'description' => 'Rol de usuario base',
        ]
    ]);
    }
}
