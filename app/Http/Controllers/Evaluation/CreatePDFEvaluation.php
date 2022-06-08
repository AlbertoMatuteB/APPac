<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\Evaluation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class CreatePDFEvaluation extends Controller
{
    public function __invoke($id)
    {
        $now = Carbon::now('CDT');
        $now = $now->isoFormat('DDMMYYYYHHmmss');
        $evaluation = Evaluation::with('beneficiary')->find($id);
        $beneficiaryName = $evaluation->beneficiary->name;
        $beneficiaryName = str_replace(' ', '_', $beneficiaryName);

        $file_name = '/evaluaciones/Ev_' . $beneficiaryName . '_' . $now . '.pdf';


        // die($file_name);

        // Browsershot::url('/evaluaciones/' . $id . '/pdf')
        //     ->format('a4')->save($file_name);
    }
}
