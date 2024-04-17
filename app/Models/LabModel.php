<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'model_name',
        'model_description',
       
    ];
    public function not_labs()
    {
        return $this->belongsTo(NotLab::class);
    }
}
