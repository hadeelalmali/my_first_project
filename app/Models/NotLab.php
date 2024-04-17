<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotLab extends Model
{
    use HasFactory;
    protected $fillable = [
        'lab_id',
        'not_content',
        'not_date',
        'model_id',
    ];
    public function lab_models()
    {
        return $this->hasMany(LabModel::class);
    }
    public function laboratories()
    {
        return $this->belongsTo(Laboratory::class);
    }

}
