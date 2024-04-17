<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'lab_id',
        'evaluation',

    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function laboratories()
    {
        return $this->belongsTo(Laboratory::class);
    }
}
