<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'phone_number',
        'user_location',
    ];
   //
    public function user_analysis()
    {
        return $this->hasMany(UserAnalysis::class);
    }
    public function not_users()
    {
        return $this->hasMany(NotUsers ::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function user_date_locations()
    {
        return $this->hasMany(UserDateLocation::class);
    }
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
