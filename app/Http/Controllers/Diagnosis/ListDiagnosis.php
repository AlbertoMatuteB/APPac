<?php

namespace App\Http\Controllers\Diagnosis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diagnosis;
use App\Models\DiagnosisBeneficiary as DpB; //diagnostico por beneficiario
use Illuminate\Support\Facades\DB;

class ListDiagnosis extends Controller
{
    public function __invoke()
    {
        $result = Diagnosis::all();

        return view('Diagnosis.index', [
            'diagnosis' => $result
        ]);
    }
}
