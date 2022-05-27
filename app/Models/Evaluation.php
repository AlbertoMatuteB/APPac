<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $table = 'evaluations';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'beneficiary_id',
        'date',
        'observations',
    ];
}
