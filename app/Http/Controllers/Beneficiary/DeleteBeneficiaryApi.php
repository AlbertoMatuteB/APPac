<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\DiagnosisBeneficiary;
use Illuminate\Http\Request;

class DeleteBeneficiaryApi extends Controller
{
    public function __invoke($id)
    {
        $diagnosisBeneficiaries = DiagnosisBeneficiary::where('beneficiary_id', $id)->get();
        foreach ($diagnosisBeneficiaries as $diagnosisBeneficiary) {
            $diagnosisBeneficiary->delete();
        }
        $beneficiary = Beneficiary::find($id);
        if ($beneficiary->delete()) {
            return response('Borrado de manera exitosa');
        } else {
            return response('No se puede borrar diagnostico', 400);
        }
    }
}
