<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserShare extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'share_id',
        'user_id',
        'doctor_patient_id',
        'user_share',
        'patient_fee',
    ];

    public function share()
    {
        return $this->belongsTo(Share::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doctorPatient()
    {
        return $this->belongsTo(DoctorPatient::class);
    }
}
