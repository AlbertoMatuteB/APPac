<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Beneficiario extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nombreBeneficiario', 'fechaNacimiento', 'genero', 'curp', 'diagnostico', 'tipoSangre', 'email', 'telefono', 'municipio', 'observacion','fecharegistro'
    ];

    protected $table = "beneficiarios";

    //Regresa el atributo edad parseado con Carbon a partir de la fecha de Nacimiento.
    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['fechaNacimiento'])->age;
    }
    
}
