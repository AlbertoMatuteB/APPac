<?php

namespace App\Http\Controllers\Beneficiary;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use Illuminate\Http\Request;

class NewBeneficiary extends Controller
{
    public function __invoke()
    {
        return view('Beneficiary.create');
    }
}
