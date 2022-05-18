<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('areas')->insert([
        [
            'id' => '1',
            'name' => 'Habilidades de Autocuidado',
            'description' => '',
        ],
        [
            'id' => '2',
            'name' => 'Habilidades de Vida en el Hogar',
            'description' => 'Habilidades de Vida en el Hogar',
        ],
        [
            'id' => '3',
            'name' => 'Habilidades de Autodirección',
            'description' => 'Habilidades de Autodirección',
        ],
        [
            'id' => '4',
            'name' => 'Habilidades de Uso de Recursos de la Comunidad',
            'description' => 'Habilidades de Uso de Recursos de la Comunidad',
        ],
        [
            'id' => '5',
            'name' => 'Habilidades Académicas Funcionales',
            'description' => 'Habilidades Académicas Funcionales',
        ],
        [
            'id' => '6',
            'name' => 'Habilidades de Comunicación',
            'description' => '',
        ],
        [
            'id' => '7',
            'name' => 'Habilidades de Ocio y Tiempo Libre',
            'description' => '',
        ],
        [
            'id' => '8',
            'name' => 'Habilidades Sociales',
            'description' => 'Habilidades Sociales',
        ],
        [
            'id' => '9',
            'name' => 'Habilidades de Trabajo',
            'description' => 'Habilidades de trabajo',
        ],
        [
            'id' => '10',
            'name' => 'Habilidades de Salud y Seguridad',
            'description' => 'Habilidades de Salud y Seguridad',
        ]
    ]);
    }
}
