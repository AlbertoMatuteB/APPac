<?php

namespace App\Http\Controllers\Diagnosis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diagnosis;
use App\Models\DiagnosisBeneficiary as DpB;//diagnostico por beneficiario
use Illuminate\Support\Facades\DB;

class DeleteDiagnosis extends Controller
{
    public function __invoke($id)
    {
        Diagnosis::find($id)->delete();

        return redirect('/diagnosticos')->with('alert','Diagnostico Eliminado Exitosamente!');
    }
}