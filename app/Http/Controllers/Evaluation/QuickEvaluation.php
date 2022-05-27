<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class QuickEvaluation extends Controller
{
    public function __invoke($id)
    {
        $user = auth()->user()->id;

        $date = Carbon::now();

        $evaluation = Evaluation::create([
            'user_id'=> $user,
            'beneficiary_id'=> $id,
            'date'=> $date->format("Y-m-d"),
            'observations'=> "Ninguna",
        ]);

        return redirect('evaluaciones')->with('nuevo', 'Evaluacion Registrada Exitosamente!');
    }
}
