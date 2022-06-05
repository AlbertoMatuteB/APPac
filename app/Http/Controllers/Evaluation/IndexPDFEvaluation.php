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
        $evaluation = Evaluation::where('id',$id)->first();
        $areas = Areas::all();
        $activities = Activities::all();
        $prev_answers = AnswerEvaluation::where('evaluation_id',$id)->get();
               
         return view('Evaluation.pdfView', ['areas' => $areas, 'activities' =>  $activities, 'evaluation' => $evaluation, 'answers' => $prev_answers]);
    }
}
