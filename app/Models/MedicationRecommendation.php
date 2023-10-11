<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicationRecommendation extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'medical_recommendation_description',
        'medicine_id',
        'phamacy_status',
        'bill_status',
        'staff_id',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'medication_recommendations';

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
