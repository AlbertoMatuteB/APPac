<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerEvaluation extends Model
{
    use HasFactory;
    protected $table = 'answer_evaluation';
    public $timestamps = false;

    protected $fillable = [
        'activity_id',
        'evaluation_id',
        'beneficiary_id',
        'answer',
        'comments',
    ];
}
