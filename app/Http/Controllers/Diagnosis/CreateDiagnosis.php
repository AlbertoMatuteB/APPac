<?php

namespace App\Http\Controllers\Diagnosis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diagnosis;
use App\Models\DiagnosisBeneficiary as DpB;//diagnostico por beneficiario
use Illuminate\Support\Facades\DB;

class CreateDiagnosis extends Controller
{
    public function __invoke()
    {
        request()->validate([
            'name' => 'required',
        ]);

        Diagnosis::create([
            'name' => request('name'),
            'description' => request('name'),
        ]);

        return redirect('/diagnosticos')->with('alert','Diagnostico Creado Exitosamente!');
    }
}