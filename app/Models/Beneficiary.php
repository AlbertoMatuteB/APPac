<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;
    protected $table = 'beneficiary';
    public $timestamps = false;

    protected $fillable = [
        'institution_id',
        'name',
        'birth_date',
        'CURP',
        'gender',
        'blood_type',
        'email',
        'city',
        'observations'
    ];
    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }
}
