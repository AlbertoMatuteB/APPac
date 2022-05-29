<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    protected $table = 'activities';
    public $timestamps = false;

    protected $fillable = [
        'area_id',
        'habilities_id',
        'name',
        'description',
    ];

    public function area()
    {
        return $this->belongsTo(Areas::class, 'area_id');
    }
}
