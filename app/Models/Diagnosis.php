<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;
    protected $table = 'diagnosis';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
    ];
    public function beneficiary()
    {
        return $this->belongsToMany(Beneficiary::class);
    }
}
