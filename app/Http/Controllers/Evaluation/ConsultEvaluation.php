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

class ConsultEvaluation extends Controller
{
    public function __invoke($id)
    {   
        $evaluation = Evaluation::where('id',$id)->first();
        $areas = Areas::all();
        $activities = Activities::all();
        $prev_answers = AnswerEvaluation::where('evaluation_id',$id)->get();
        
       
        return view('Evaluation.show', ['areas' => $areas, 'activities' =>  $activities, 'evaluation' => $evaluation, 'answers'=>$prev_answers]);
    }
}
