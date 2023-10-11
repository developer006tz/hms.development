<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InPatient extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'patient_id',
        'appointment_diagnosis_test_id',
        'hospital_id',
        'doctor_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'in_patients';

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function appointmentDiagnosisTest()
    {
        return $this->belongsTo(AppointmentDiagnosisTest::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'doctor_id');
    }
}
