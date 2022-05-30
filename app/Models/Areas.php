<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;
    protected $table = 'areas';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
    ];
}
