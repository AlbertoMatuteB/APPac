<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Beneficiario extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombreBeneficiario' => $this->nombreBeneficiario,
            'fechaNacimiento' => $this->fechaNacimiento,
            'genero' => $this->genero,
            'curp' => $this->curp,
            'diagnostico' => $this->diagnostico,
            'tipoSangre' => $this->tipoSangre,
            'email' => $this->email,
            'telefono'=> $this->telefono,
            'municipio' => $this->municipio,
            'observacion' => $this->observacion,
        ];
    }
}