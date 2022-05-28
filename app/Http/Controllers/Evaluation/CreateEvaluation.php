<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CreateEvaluation extends Controller
{
    public function __invoke()
    {
        $user = auth()->user()->id;

        request()->validate([
            'beneficiary_id' => 'required',
            'observations' => 'nullable',
        ]);

        $date = Carbon::now();

        $evaluation = Evaluation::create([
            'user_id'=> $user,
            'beneficiary_id'=> request('beneficiary_id'),
            'date'=> $date->format("Y-m-d"),
            'observations'=> request('observations'),
        ]);

        return view('Evaluation.eval', ['evaluation' => $evaluation]);
    }
}
