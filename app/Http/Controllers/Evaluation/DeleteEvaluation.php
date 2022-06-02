<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DeleteEvaluation extends Controller
{
    public function __invoke($id)
    {   
        Evaluation::find($id)->delete();

        return redirect('/evaluaciones')->with('alert','Diagnostico Eliminado Exitosamente!');
    }
}
