<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class DeleteEvaluationApi extends Controller
{
    public function __invoke($id)
    {
        $evaluation = Evaluation::find($id);
        if ($evaluation->delete()) {
            return response('Borrado de manera exitosa');
        } else {
            return response('No se puede borrar evaluacion', 400);
        }
    }
}
