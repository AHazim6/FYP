<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    // Specify the fields that can be mass-assigned
    protected $fillable = ['name'];
    public function medicalReports(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MedicalReport::class);
    }
}
