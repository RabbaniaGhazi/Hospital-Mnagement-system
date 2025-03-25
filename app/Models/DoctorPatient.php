<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorPatient extends Model
{
    use HasFactory;
    protected $table = 'doctor_patient';
    protected $fillable = [
        'user_id',
        'patient_id',
        'total_fee',
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id'); 
    }

    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id'); 
    }
    public function shares()
    {
        return $this->hasMany(UserShare::class, 'doctor_patient_id');
    }
}
