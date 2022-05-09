<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DiagnosisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('diagnosis')->insert([
        [
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
    ]);
    }
}
