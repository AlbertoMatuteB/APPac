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
    public function evaluator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class, 'beneficiary_id');
    }
}
