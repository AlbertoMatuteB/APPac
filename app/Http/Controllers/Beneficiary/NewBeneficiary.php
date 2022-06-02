<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\City;
use App\Models\Diagnosis;
use Illuminate\Http\Request;

class NewBeneficiary extends Controller
{
    public function __invoke()
    {
        $cities = City::all();
        $diagnosis = Diagnosis::all();
        return view('Beneficiary.create', compact('cities', 'diagnosis'));
    }
}
