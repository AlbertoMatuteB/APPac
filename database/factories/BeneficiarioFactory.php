<?php

namespace Database\Factories;

use App\Models\Beneficiario;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeneficiarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Beneficiario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return
        [
            'nombreBeneficiario' => $this->faker->name,
            'fechaNacimiento' => $this->faker->fechaNacimiento,
            'genero' => 'Masculino',
            'curp'=> $this->faker->curp,
            'diagnostico' => $this->faker->diagnostico,
            'tipoSangre'=> $this->faker->tipoSangre,
            'email' => $this->faker->email,
            'telefono' => $this->faker->telefono,
            'municipio' => $this->faker->municipio,
            'observacion' => $this->faker->observacion,
        ];
    }
}
