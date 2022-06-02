<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\Beneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewEvaluation extends Controller
{
    public function __invoke()
    {
        $beneficiary = Beneficiary::orderBy('name', 'ASC')->get();

        return view('Evaluation.create', ['beneficiaries' => $beneficiary]);
    }
}
