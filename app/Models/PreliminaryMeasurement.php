<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PreliminaryMeasurement extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'patient_id',
        'staff_id',
        'preasure',
        'weight',
        'height',
        'custom_diagnosis',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'preliminary_measurements';

    protected $casts = [
        'custom_diagnosis' => 'array',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
