<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use Illuminate\Http\Request;

class ListBeneficiary extends Controller
{
    public function __invoke()
    {
        $beneficiary = Beneficiary::all();

        return view('Beneficiary.BeneficiaryList', ['beneficiary' => $beneficiary]);
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
