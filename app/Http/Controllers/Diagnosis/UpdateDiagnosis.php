<?php

namespace App\Http\Controllers\Diagnosis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diagnosis;
use App\Models\DiagnosisBeneficiary as DpB;//diagnostico por beneficiario
use Illuminate\Support\Facades\DB;

class UpdateDiagnosis extends Controller
{
    public function __invoke($id)
    {
        $diagnosis = Diagnosis::find($id);

        request()->validate([
            'name' => 'required',
        ]);

        $diagnosis->update([
            'name' => request('name'),
            'description' => request('name'),
        ]);

        return redirect('/diagnosticos')->with('alert','Diagnostico Editado Exitosamente!');
    }

    public function show($id)
    {
        $diagnosis = Diagnosis::where('id', $id)->first();

        return view('Diagnosis.edit', ['diagnosis' => $diagnosis]);
    }
}