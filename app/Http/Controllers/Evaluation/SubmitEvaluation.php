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

class SubmitEvaluation extends Controller
{
    public function __invoke($id)
    {   
        $evaluation = Evaluation::where('id',$id)->first();
        $activities = Activities::all();
        $request = request();
        $long = count($activities);
       
        for ($i=1; $i < $long+1; $i++) { 
            if($request->input($i) != null){

                $comment =  $request->input('comment-'.$i);

                if($comment != null){
                    $answer = AnswerEvaluation::create([
                        'activity_id'=> $i,
                        'evaluation_id' => $id,
                        'beneficiary_id' => $evaluation->beneficiary_id,
                        'answer' => $request->input($i),
                        'comments'=>$comment,
                    ]);
                }else{
                    $answer = AnswerEvaluation::create([
                        'activity_id'=> $i,
                        'evaluation_id' => $id,
                        'beneficiary_id' => $evaluation->beneficiary_id,
                        'answer' => $request->input($i),
                    ]);
                }
            }
        }
        return redirect('/evaluaciones')->with('alert','Evaluación completada correctamente!');
    }
}
