<?php

namespace App\Models;

use Carbon\Carbon;
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
        'city_id',
        'observations'
    ];
    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }
    public function age()
    {
        return Carbon::parse($this->birth_date)->age;
    }
    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }
}
