<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'Administrador',
            'description' => 'Rol de administrador',
        ],
        [
            'id' => '2',
            'name' => 'Usuario',
            'description' => 'Rol de usuario base',
        ]);
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Forrest',
            'last_name' => 'Gump',
            'rol_id' => '1',
            'email' => Str::random(10).'fgump@bubbagump.com',
            'password' => Hash::make('undiaalavez'),
        ]);

        DB::table('diagnosis')->insert([
            'name' => 'P.C.I',
            'description' => '...',
        ],
        [
            'name' => 'Discapacidad Intelectual',
            'description' => '...',
        ],
        [
            'name' => 'Sx Down',
            'description' => '...',
        ],
        [
            'name' => 'Epilepsia',
            'description' => '...',
        ],
        [
            'name' => 'Hidrocefalia',
            'description' => '...',
        ],
        [
            'name' => 'Paraparesia hipotónica',
            'description' => '...',
        ],
        [
            'name' => 'Cuadriparesia espástica',
            'description' => '...',
        ],
        [
            'name' => 'Retraso Global del Desarrollo',
            'description' => '...',
        ],
        [
            'name' => 'Traumatismo',
            'description' => '...',
        ],
        [
            'name' => 'Sx Hipotónico',
            'description' => '...',
        ],
        [
            'name' => 'Sc Dismórfico',
            'description' => '...',
        ],
        [
            'name' => 'Sx Marfan',
            'description' => '...',
        ],
        [
            'name' => 'Hemiparesia',
            'description' => '...',
        ],
        [
            'name' => 'Sx Lenox',
            'description' => '...',
        ],
        [
            'name' => 'Cuadriparesia hipotónica',
            'description' => '...',
        ]
    );

    DB::table('areas')->insert([
        'id' => '1',
        'name' => 'Habilidades de Autocuidado',
        'descripcion' => '',
    ],
    [
        'id' => '2',
        'name' => 'Habilidades de Vida en el Hogar',
        'descripcion' => 'Habilidades de Vida en el Hogar',
    ],
    [
        'id' => '3',
        'name' => 'Habilidades de Autodirección',
        'descripcion' => 'Habilidades de Autodirección',
    ],
    [
        'id' => '4',
        'name' => 'Habilidades de Uso de Recursos de la Comunidad',
        'descripcion' => 'Habilidades de Uso de Recursos de la Comunidad',
    ],
    [
        'id' => '5',
        'name' => 'Habilidades Académicas Funcionales',
        'descripcion' => 'Habilidades Académicas Funcionales',
    ],
    [
        'id' => '6',
        'name' => 'Habilidades de Comunicación',
        'descripcion' => '',
    ],
    [
        'id' => '7',
        'name' => 'Habilidades de Ocio y Tiempo Libre',
        'descripcion' => '',
    ],
    [
        'id' => '8',
        'name' => 'Habilidades Sociales',
        'descripcion' => 'Habilidades Sociales',
    ],
    [
        'id' => '9',
        'name' => 'Habilidades de trabajo',
        'descripcion' => 'Habilidades de trabajo',
    ],
    [
        'id' => '10',
        'name' => 'Habilidades de Salud y Seguridad',
        'descripcion' => 'Habilidades de Salud y Seguridad',
    ]

);

DB::table('habilities')->insert([
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
    'name' => '',
    'description' => 'Autodirección',
    'area_id' => '3',
],
[
    'id' => '9',
    'name' => '',
    'description' => 'Uso de Recursos de la Comunidad',
    'area_id' => '4',
],
[
    'id' => '10',
    'name' => '',
    'description' => 'Académicas Funcionales',
    'area_id' => '5',
],
[
    'id' => '11',
    'name' => '',
    'description' => 'Comunicación',
    'area_id' => '6',
],
[
    'id' => '12',
    'name' => '',
    'description' => 'Ocio y Tiempo Libre',
    'area_id' => '7',
],
[
    'id' => '13',
    'name' => '',
    'description' => 'Sociales',
    'area_id' => '8',
],
[
    'id' => '14',
    'name' => '',
    'description' => 'Trabajo',
    'area_id' => '9',
],
[
    'id' => '15',
    'name' => '',
    'description' => 'Salud y Seguridad',
    'area_id' => '10',
],
);

    }
}
