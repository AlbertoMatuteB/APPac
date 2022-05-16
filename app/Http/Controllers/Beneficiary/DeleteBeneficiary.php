<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use Illuminate\Http\Request;

class DeleteBeneficiary extends Controller
{
    public function __invoke($id)
    {
        Beneficiary::find($id)->delete();

        return redirect('beneficiarios/')->with('nuevo', 'Beneficiario Eliminado Exitosamente!');
    }
}
