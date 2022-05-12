<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;
    protected $table = 'beneficiary';

    protected $fillable = [
        'institution_id',
        'name',
        'birth_date',
        'CURP',
        'genre',
        'blood_type',
        'email',
        'city',
        'observations'
    ];
}
