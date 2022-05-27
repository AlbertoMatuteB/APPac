<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ListEvaluation extends Controller
{
    public function __invoke()
    {

        $evaluations = Evaluation::with('evaluator', 'beneficiary')->orderBy('date', 'DESC')->paginate(10);

        return view('Evaluation.index', ['evaluations' => $evaluations]);
    }
}
