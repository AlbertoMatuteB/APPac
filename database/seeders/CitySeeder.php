<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => 'Amealco de Bonfil'],
            ['name' => 'Pinal de Amoles'],
            ['name' => 'Arroyo Seco'],
            ['name' => 'Cadereyta de Montes'],
            ['name' => 'Colón'],
            ['name' => 'Corregidora'],
            ['name' => 'Ezequiel Montes'],
            ['name' => 'Huimilpan'],
            ['name' => 'Jalpan de Serra'],
            ['name' => 'Landa de Matamoros'],
            ['name' => 'El Marqués'],
            ['name' => 'Pedro Escobedo'],
            ['name' => 'Peñamiller'],
            ['name' => 'Querétaro'],
            ['name' => 'San Joaquín'],
            ['name' => 'San Juan del Río'],
            ['name' => 'Tequisquiapan'],
            ['name' => 'Tolimán'],

        ]);
    }
}
