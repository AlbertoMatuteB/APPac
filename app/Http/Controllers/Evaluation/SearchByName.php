<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\Beneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SearchByName extends Controller
{
    public function __invoke()
    {
        $name = request('search');

        $beneficiary = Beneficiary::where('name', 'like', '%' . $name . '%')->first();
        
        $evaluations = Evaluation::where('beneficiary_id', 'like', '%' . $beneficiary->id . '%')->orderBy('date', 'DESC')->paginate(5);

        return view('Evaluation.index', ['evaluations' => $evaluations]);

    }
}
