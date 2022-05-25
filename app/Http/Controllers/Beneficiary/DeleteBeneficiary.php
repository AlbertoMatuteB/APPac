<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\DiagnosisBeneficiary;
use Illuminate\Http\Request;

class DeleteBeneficiary extends Controller
{
    public function __invoke($id)
    {
        $diagnosisBeneficiaries = DiagnosisBeneficiary::where('beneficiary_id', $id)->get();
        foreach ($diagnosisBeneficiaries as $diagnosisBeneficiary) {
            $diagnosisBeneficiary->delete();
        }
        Beneficiary::find($id)->delete();

        return redirect('beneficiarios/')->with('nuevo', 'Beneficiario Eliminado Exitosamente!');
    }
}
