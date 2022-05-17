<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use Illuminate\Http\Request;

class CreateBeneficiary extends Controller
{
    public function __invoke()
    {
        request()->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'CURP' => 'required',
            'blood_type' => 'required',
            'email' => 'required',
            'city_id' => 'nullable',
            'observations' => 'nullable',
        ]);

        Beneficiary::create([
            'name' => request('name'),
            'birth_date' => request('birth_date'),
            'gender' => request('gender'),
            'CURP' => request('CURP'),
            'blood_type' => request('blood_type'),
            'email' => request('email'),
            'city_id' => request('city'),
            'observations' => request('observations'),
            'institution_id' => 1,
        ]);

        return redirect('beneficiarios')->with('nuevo', 'Beneficiario Registrado Exitosamente!');
    }
}
