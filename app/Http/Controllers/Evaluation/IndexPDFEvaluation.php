<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Activities;
use App\Models\AnswerEvaluation;
use App\Models\Areas;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class IndexPDFEvaluation extends Controller
{
    public function __invoke($id)
    {
        $evaluation = Evaluation::with('evaluator', 'beneficiary.institution', 'beneficiary.diagnostic')->where('id', $id)->first();
        $areas = Areas::all();
        $activities = Activities::all();
        $last_eval = Evaluation::where('beneficiary_id', $evaluation->beneficiary_id)->whereNot('id', $id)->orderBy('id', 'DESC')->first();
        if ($last_eval != null) {
            $prev_answers = AnswerEvaluation::where('evaluation_id', $last_eval->id)->get();
        } else {
            $prev_answers = [];
        }

        return view('Evaluation.pdfView', ['areas' => $areas, 'activities' =>  $activities, 'evaluation' => $evaluation, 'answers' => $prev_answers]);
    }
}
