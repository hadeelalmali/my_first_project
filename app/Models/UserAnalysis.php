<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnalysis extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'lab_analysis_id',
        
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function lab_analysis()
    {
        return $this->belongsTo(Labanalysis::class);
    }
}
