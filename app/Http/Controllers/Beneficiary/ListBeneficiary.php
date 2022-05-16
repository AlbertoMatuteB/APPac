<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListBeneficiary extends Controller
{
    public function __invoke()
    {
        $beneficiary = Beneficiary::with('institution')->paginate(10);

        return view('Beneficiary.BeneficiaryList', ['beneficiaries' => $beneficiary]);
    }

    // Buscar un beneficiario a partir del request AJAX.
    public function searchBeneficiarios(Request $request)
    {
        $name=$request->get('search');
        $beneficiaries = Beneficiary::with('institution')->where('name', 'like', '%'.$name.'%')->paginate(5);

        return view('Beneficiary.BeneficiaryList', ['beneficiaries' => $beneficiaries]);
    }

    // Busca un beneficiario con el request AJAX y el parámetro edad.
    public function searchBeneficiariosAge(Request $request)
    {
        $mytime = date("Y");
        $name=$request->get('search');
        $year = $mytime - $name;
        $beneficiaries = Beneficiary::with('institution')->where('birth_date', 'like', '%'.$year.'%')->paginate(5);

        return view('Beneficiary.BeneficiaryList', ['beneficiaries' => $beneficiaries]);
    }
}
/**
 * TODO
 * check user permitions
 * admin?
 *  all
 *  :
 *  get their intitution_id
 *  query where('institution_id', $user->institution_id)
 */
