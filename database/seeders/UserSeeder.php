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
                'name' => 'Super',
                'last_name' => 'Admin',
                'role_id' => '1',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}
