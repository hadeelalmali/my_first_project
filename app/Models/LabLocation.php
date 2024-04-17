<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'lab_address',
       

    ];
    public function laboratories()
    {
        return $this->belongsTo(Laboratory::class);
    }
    public function online_distances()
    {
        return $this->hasMany(OnlineDistance::class);
    }
}
