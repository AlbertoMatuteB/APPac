<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use Illuminate\Http\Request;

class ListBeneficiary extends Controller
{
    public function __invoke()
    {
        $beneficiary = Beneficiary::paginate(1);

        return view('Beneficiary.BeneficiaryList', ['beneficiaries' => $beneficiary]);
    }

    // Buscar un beneficiario a partir del request AJAX.
    public function searchBeneficiarios(Request $request)
    {

        $beneficiarios = Beneficiary::where('name', 'like', '%'.$request->get('searchQuest'). '%')
                        ->where('genre', 'like', '%'.$request->get('searchQuestGenero'). '%')
                        ->get();
        
        return json_encode( $beneficiarios );
    }

    // Busca un beneficiario con el request AJAX y el parámetro edad.
    public function searchBeneficiariosAge(Request $request)
    {
        $beneficiarios = Beneficiary::where('name', 'like', '%'.$request->get('searchQuest'). '%')
                        ->whereBetween('birth_date', [$request->get('fechaBegin'), $request->get('fechaEnd')])
                        ->where('genre', 'like', '%'.$request->get('searchQuestGenero'). '%')
                        ->get();
        
        return json_encode( $beneficiarios );
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
