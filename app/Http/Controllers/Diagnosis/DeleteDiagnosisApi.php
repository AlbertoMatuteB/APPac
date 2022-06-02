<?php

namespace App\Http\Controllers\Diagnosis;

use App\Http\Controllers\Controller;
use App\Models\Diagnosis;
use Exception;
use Illuminate\Http\Request;

class DeleteDiagnosisApi extends Controller
{
    public function __invoke($id)
    {
        $diagnosis = Diagnosis::find($id);
        if ($diagnosis->delete()) {
            return response('Borrado de manera exitosa');
        } else {
            return response('No se puede borrar diagnostico', 400);
        }
    }
}
