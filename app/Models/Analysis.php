<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{
    use HasFactory;
    protected $fillable = [
        'analysis_name',
        'cost',
    ];
    public function lab_analysis()
    {
        return $this->hasMany(LabAnalysis::class);
    }
}
