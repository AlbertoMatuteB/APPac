<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\City;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReadBeneficiary extends Controller
{
    public function __invoke($id)
    {
        $beneficiary = Beneficiary::with('institution')->findOrFail($id);
        $cities = City::all();
        // $beneficiary['age']=Carbon
        // return view('Beneficiary.show');
        return view('Beneficiary.show', compact('beneficiary', 'cities'))->with(['id' => $id]);
    }
}
