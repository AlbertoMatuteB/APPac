<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\Beneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SearchByDate extends Controller
{
    public function __invoke()
    {
        $date = request('search');
        
        $evaluations = Evaluation::where('date', 'like', '%' . $date . '%')->paginate(5);

        return view('Evaluation.index', ['evaluations' => $evaluations]);

    }
}
