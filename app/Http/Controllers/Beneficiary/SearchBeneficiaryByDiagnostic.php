<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\Diagnosis;
use App\Models\DiagnosisBeneficiary;
use Illuminate\Http\Request;

class SearchBeneficiaryByDiagnostic extends Controller
{
    public function __invoke(Request $request)
    {
        $id = $request->get('search');
        $benefDiagnosis = DiagnosisBeneficiary::has('diagnostic')->where('diagnosis_id', 'like', '%' . $id . '%')->pluck('beneficiary_id');
        echo "<script>console.log('Console: " . strval( $benefDiagnosis ) . "' );</script>";
        $beneficiaries = Beneficiary::with('institution');
        foreach ($benefDiagnosis as $benef)
        {
            $beneficiaries->orWhere('id', 'like', '%' . $benef . '%');
        }
        $beneficiaries = $beneficiaries->paginate(5);
        $diagnosis = Diagnosis::all();

        return view('Beneficiary.index', compact('beneficiaries', 'diagnosis'));
    }
}
