<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Activities;
use App\Models\AnswerEvaluation;
use App\Models\Areas;
use App\Models\Evaluation;

class IndexPDFEvaluation extends Controller
{
    public function __invoke($id)
    {
        $res[] = [];
        $evaluation = Evaluation::with('evaluator', 'beneficiary.institution', 'beneficiary.diagnostic')->where('id', $id)->first();
        $answers = AnswerEvaluation::with('activity')->where('evaluation_id', $id)->get();
        $areas = Areas::all();
        $activities = Activities::all();


        foreach ($areas as $key => $area) {
            $res[$key] = $area;
            $temp = collect();
            foreach ($answers as $key2 => $answer) {
                $areaId = $answer->activity->area_id;
                $answer['area_id'] = $areaId;
                if ($areaId == $area->id) {
                    $temp->push($answer);
                    // $temp[] = $answer;
                    // $res[$key][$key2] = $answer; //meter a arreglo
                }
                if (!$temp->isEmpty()) {
                    $res[$key]['answers'] = $temp;
                } else {
                    unset($res[$key]);
                }
            }
            // if (!empty($res[$key])) {
            // }
        }
        // die($data);

        // // $data['evaluation'] = $evaluation;
        // // $data['ans'] = $answers;
        $data['data'] = $res;

        // return response($data);

        return view('Evaluation.pdfView', [
            'areas' => $areas,
            'activities' =>  $activities,
            'evaluation' => $evaluation,
            'answers' => $answers,
            'filteredAnswers' => $res
        ]);
    }
}
