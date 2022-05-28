<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\Diagnosis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListBeneficiary extends Controller
{
    public function __invoke()
    {
        $beneficiaries = Beneficiary::with('institution')->paginate(10);
        $diagnosis = Diagnosis::all();
        return view('Beneficiary.index', compact('beneficiaries', 'diagnosis'));
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
