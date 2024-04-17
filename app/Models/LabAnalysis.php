<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabAnalysis extends Model
{
    use HasFactory;
    protected $fillable = [
        'analysis_id',
        'lab_id',
        'cost',

    ];
    public function user_analysis()
    {
        return $this->hasMany(UserAnalysis::class);
    }
    public function laboratories()
    {
        return $this->belongsTo(Laboratory::class);
    }
    public function analysis()
    {
        return $this->belongsTo(Analysis::class);
    }
}
