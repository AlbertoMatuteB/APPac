<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\City;
use App\Models\Diagnosis;
use App\Models\DiagnosisBeneficiary;
use Illuminate\Http\Request;

class UpdateBeneficiary extends Controller
{
    public function __invoke($id)
    {
        $beneficiario = Beneficiary::find($id);
        $diagnosis = request('diagnosis');

        request()->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'CURP' => 'required',
            'blood_type' => 'nullable',
            'email' => 'nullable',
            'city_id' => 'nullable',
            'observations' => 'nullable',
            'social_status'=> 'required',
            'health_care' => 'required',
            'provider' => 'required',
        ]);

        $beneficiario->update([
            'name' => request('name'),
            'birth_date' => request('birth_date'),
            'gender' => request('gender'),
            'CURP' => request('CURP'),
            'blood_type' => request('blood_type'),
            'email' => request('email'),
            'city_id' => request('city_id'),
            'observations' => request('observations'),
            'institution_id' => 1,
            'social_status'=> request('social_status'),
            'health_care' => request('health_care'),
            'provider' => request('provider'),
        ]);


        $diagnosisBeneficiaries = DiagnosisBeneficiary::where('beneficiary_id', $id)->get();
        foreach ($diagnosisBeneficiaries as $diagnosisBeneficiary) {
            $diagnosisBeneficiary->delete();
        }


        foreach ($diagnosis as $diagnostic) {
            DiagnosisBeneficiary::create([
                'beneficiary_id' => $id,
                'diagnosis_id' => $diagnostic
            ]);
        }

        return redirect('beneficiarios')->with('nuevo', 'Beneficiario Editado Exitosamente!');
    }
    public function show($id)
    {
        $beneficiary = Beneficiary::with('city')->where('id', $id)->first();
        $cities = City::all();
        $diagnosis = Diagnosis::all();
        $diagnosisBeneficiaries = DiagnosisBeneficiary::where('beneficiary_id', $id)->get('diagnosis_id');

        return view('Beneficiary.update', compact('beneficiary', 'cities', 'diagnosis', 'diagnosisBeneficiaries'));
    }
}
