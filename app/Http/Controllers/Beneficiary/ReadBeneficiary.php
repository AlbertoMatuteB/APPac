<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\City;
use App\Models\Diagnosis;
use App\Models\DiagnosisBeneficiary;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReadBeneficiary extends Controller
{
    public function __invoke($id)
    {
        $beneficiary = Beneficiary::with('institution')->findOrFail($id);
        $cities = City::all();
        $diagnosis = Diagnosis::all();
        $diagnosisBeneficiaries = DiagnosisBeneficiary::where('beneficiary_id', $id)->get('diagnosis_id');


        return view('Beneficiary.show', compact('beneficiary', 'cities', 'diagnosis', 'diagnosisBeneficiaries'))->with(['id' => $id]);
    }
}
