<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('habilities')->insert([
        [
            'id' => '1',
            'name' => 'Comida ',
            'description' => '(Autocuidado)',
            'area_id' => '1',
        ],
        [
            'id' => '2',
            'name' => 'Vestido ',
            'description' => '(Autocuidado)',
            'area_id' => '1',
        ],
        [
            'id' => '3',
            'name' => 'Higiene ',
            'description' => '(Autocuidado)',
            'area_id' => '1',
        ],
        [
            'id' => '4',
            'name' => 'Ropa ',
            'description' => '(Vida en el Hogar)',
            'area_id' => '2',
        ],
        [
            'id' => '5',
            'name' => 'Alimento ',
            'description' => '(Vida en el Hogar)',
            'area_id' => '2',
        ],
        [
            'id' => '6',
            'name' => 'Higiene ',
            'description' => '(Vida en el Hogar)',
            'area_id' => '2',
        ],
        [
            'id' => '7',
            'name' => 'General ',
            'description' => '(Vida en el Hogar)',
            'area_id' => '2',
        ],
        [
            'id' => '8',
            'name' => 'General ',
            'description' => 'Autodirección',
            'area_id' => '3',
        ],
        [
            'id' => '9',
            'name' => 'General',
            'description' => 'Uso de Recursos de la Comunidad',
            'area_id' => '4',
        ],
        [
            'id' => '10',
            'name' => 'General',
            'description' => 'Académicas Funcionales',
            'area_id' => '5',
        ],
        [
            'id' => '11',
            'name' => 'General',
            'description' => 'Comunicación',
            'area_id' => '6',
        ],
        [
            'id' => '12',
            'name' => 'General',
            'description' => 'Ocio y Tiempo Libre',
            'area_id' => '7',
        ],
        [
            'id' => '13',
            'name' => 'General',
            'description' => 'Sociales',
            'area_id' => '8',
        ],
        [
            'id' => '14',
            'name' => 'General',
            'description' => 'Trabajo',
            'area_id' => '9',
        ],
        [
            'id' => '15',
            'name' => 'General',
            'description' => 'Salud y Seguridad',
            'area_id' => '10',
        ],
        ]);
    }
}
