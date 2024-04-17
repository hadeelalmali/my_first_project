<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'model_name',
        'model_description',
        
        
    ];
    public function not_users()
    {
        return $this->belongsTo(NotUsers::class);
    }
}
