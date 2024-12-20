<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'ic', 'gender', 'age', 'phone', 'address', 'consent_form', 'medical_history_form', 'parent_name'
    ];
    protected $casts = [
        'consent_form' => 'boolean',
        'medical_history_form' => 'boolean',
    ];
    public function appointments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Appointment::class);
    }
    public function medicalReports(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MedicalReport::class);
    }

}
