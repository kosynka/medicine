<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'inspection_type',
        'patient_id',
        'complaints',
        'ill_anamnesis',
        'check_up_results',
        'life_anamnesis',
        'allergological_anamnesis',
        'objective_data',
        'examination',
        'treatment_plan',
        'other',
        'doctor_id',
    ];

    protected $casts = [
        'complaints' => 'array',
        'ill_anamnesis' => 'array',
        'check_up_results' => 'array',
        'life_anamnesis' => 'array',
        'allergological_anamnesis' => 'array',
        'objective_data' => 'array',
        'examination' => 'array',
        'treatment_plan' => 'array',
        'other' => 'array',
    ];
}
