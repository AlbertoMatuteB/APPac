<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnosis as Diagnosticos;
use App\Models\DiagnosisBeneficiary as DpB;//diagnostico por beneficiario
use Illuminate\Support\Facades\DB;

class DiagnosisController extends Controller
{
    /**
     * Regresa la vista con la tabla que contiene a todos los diagnosticos.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $result = Diagnosticos::all();
        
        return view('Diagnosis.diagnosticos', [
            'diagnosticos' => $result
        ]);
    }

    /**
     * Regresa la vista con la tabla que contiene a todos los diagnosticos.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function delete($id)
    {
        Diagnosticos::find($id)->delete();

        return redirect('/diagnosticos')->with('alert','Diagnostico Eliminado Exitosamente!');
    }

    public function create()
    {
        return view('Diagnosis.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
        ]);

        Diagnosticos::create([
            'name' => request('name'),
            'description' => request('name'),
        ]);

        return redirect('/diagnosticos')->with('alert','Diagnostico Creado Exitosamente!');
    }
}
