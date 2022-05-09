<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        [
            'name' => 'Forrest',
            'last_name' => 'Gump',
            'rol_id' => '1',
            'email' => 'fgump@bubbagump.com',
            'password' => Hash::make('undiaalavez'),
        ]
    ]);
    }
}
