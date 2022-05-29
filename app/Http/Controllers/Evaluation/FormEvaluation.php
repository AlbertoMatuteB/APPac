<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\Areas;
use App\Models\Activities; 
use App\Models\AnswerEvaluation; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class FormEvaluation extends Controller
{
    public function __invoke($id)
    {   
        $evaluation = Evaluation::where('id',$id)->first();
        $areas = Areas::all();
        $activities = Activities::all();
        $last_eval = Evaluation::where('beneficiary_id',$evaluation->beneficiary_id)->whereNot('id',$id)->orderBy('id', 'DESC')->first();
        if($last_eval != null){
            $prev_answers = AnswerEvaluation::where('evaluation_id',$last_eval->id)->get();
        }else{
            $prev_answers = [];
        }
       
        return view('Evaluation.eval', ['areas' => $areas, 'activities' =>  $activities, 'evaluation' => $evaluation, 'answers'=>$prev_answers]);
    }
}
