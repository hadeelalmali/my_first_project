<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'role_id',
        'appointment_date',
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
