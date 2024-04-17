<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineDistance extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_date_loc_id',
        'distance',
        'lab_loc_id',
        
    ];
    public function lab_location()
    {
        return $this->belongsTo(LabLocation::class);
    }
    public function user_date_locations()
    {
        return $this->belongsTo(UserDateLocation::class);
    }
}
