<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
//TODO: change model
use App\Models\Beneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListEvaluation extends Controller
{
    public function __invoke()
    {
        //TODO: use Evaluation model
        $beneficiary = Beneficiary::with('institution')->paginate(10);

        return view('Evaluation.EvaluationList', ['beneficiaries' => $beneficiary]);
    }
}
