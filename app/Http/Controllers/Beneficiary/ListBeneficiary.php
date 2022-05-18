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
