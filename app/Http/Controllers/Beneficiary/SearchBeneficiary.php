<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use Illuminate\Http\Request;

class SearchBeneficiary extends Controller
{
    public function __invoke(Request $request)
    {
        $name = $request->get('search');
        $beneficiaries = Beneficiary::with('institution')->where('name', 'like', '%' . $name . '%')->paginate(5);

        return view('Beneficiary.index', ['beneficiaries' => $beneficiaries]);
    }
}
