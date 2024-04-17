<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDateLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_location',
        'login_date',
        
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function online_distances()
    {
        return $this->hasMany(OnlineDistance::class);
    }

}
