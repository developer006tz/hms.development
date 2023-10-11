<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientAppointmentDiagnosis extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'symptoms',
        'diagnosis_description',
        'lab_id',
        'hospital_id',
        'appointment_id',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'patient_appointment_diagnoses';

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function appointmentDiagnosisTest()
    {
        return $this->hasOne(AppointmentDiagnosisTest::class);
    }

    public function appointment2()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'doctor_id');
    }
}
