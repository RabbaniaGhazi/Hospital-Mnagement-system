<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'address','phone_number',
        'whatsapp_number', 'doctor', ];
    public function doctors()
    {
        return $this->belongsToMany(User::class, 'doctor_patient')->withPivot('total_fee');
    }
}

