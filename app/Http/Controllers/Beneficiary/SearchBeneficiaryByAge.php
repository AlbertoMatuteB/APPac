<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use Illuminate\Http\Request;

class SearchBeneficiaryByAge extends Controller
{
    public function __invoke(Request $request)
    {
        $mytime = date("Y");
        $name = $request->get('search');
        $year = $mytime - $name;
        $beneficiaries = Beneficiary::with('institution')->where('birth_date', 'like', '%' . $year . '%')->paginate(5);

        return view('Beneficiary.index', ['beneficiaries' => $beneficiaries]);
    }
}
