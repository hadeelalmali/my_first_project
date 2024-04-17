<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;
    protected $fillable = [
        'lab_name',
        'lab_address',
        'lab_information',
        'lab_number',
    ]; 
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
    public function not_labs()
    {
        return $this->hasMany(NotLab::class);
    }
    public function lab_location()
    {
        return $this->hasOne(LabLocation::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    
    }
    public function lab_analysis()
    {
        return $this->hasMany(LabAnalysis::class);
    }
    

}
