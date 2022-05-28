<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosisBeneficiary extends Model
{
    use HasFactory;
    protected $table = 'beneficiary_diagnosis';
    public $timestamps = false;

    protected $fillable = [
        'beneficiary_id',
        'diagnosis_id',
    ];
    public function beneficiary()
    {
        return $this->hasOne(Beneficiary::class, 'id', 'beneficiary_id');
    }
    public function diagnostic()
    {
        return $this->hasOne(Diagnosis::class, 'id', 'diagnosis_id');
    }
}
