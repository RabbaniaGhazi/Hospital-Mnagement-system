<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role',
    ];
    public function doctorPatients()
    {
        return $this->hasMany(DoctorPatient::class, 'user_id');
    }
   
    public function shares()
    {
        return $this->hasMany(Share::class);
    }
    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'doctor_patient')->withPivot('total_fee');
    }
    public function userShares()
    {
        return $this->hasMany(UserShare::class);
    }
}
