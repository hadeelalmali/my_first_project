<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Not_users extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'not_content',
        'not_date',
        'model_id',
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function user_models()
    {
        return $this->hasMany(UserModel::class);
    
}
}
