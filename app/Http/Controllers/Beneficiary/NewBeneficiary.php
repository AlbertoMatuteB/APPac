<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\City;
use Illuminate\Http\Request;

class NewBeneficiary extends Controller
{
    public function __invoke()
    {
        $cities = City::select('name')->get();
        return view('Beneficiary.create', compact('cities'));
    }
}
