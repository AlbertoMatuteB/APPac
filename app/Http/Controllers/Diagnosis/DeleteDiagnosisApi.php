<?php

namespace App\Http\Controllers\Diagnosis;

use App\Http\Controllers\Controller;
use App\Models\Diagnosis;
use Illuminate\Http\Request;

class DeleteDiagnosisApi extends Controller
{
    public function __invoke($id)
    {
        Diagnosis::find($id)->delete();

        return response('Borrado de manera exitosa');
    }
}
