<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\City;
use Illuminate\Http\Request;

class UpdateBeneficiary extends Controller
{
    public function __invoke($id)
    {

        $beneficiario = Beneficiary::find($id);

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
        ]);

        return redirect('beneficiarios')->with('nuevo', 'Beneficiario Editado Exitosamente!');
    }
    public function show($id)
    {
        $beneficiary = Beneficiary::with('city')->where('id', $id)->first();
        $cities = City::all();

        return view('Beneficiary.update', compact('beneficiary', 'cities'));
    }
}
