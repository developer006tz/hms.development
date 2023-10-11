<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppointmentDiagnosisTest extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['patient_appointment_diagnosis_id', 'hospital_id'];

    protected $searchableFields = ['*'];

    protected $table = 'appointment_diagnosis_tests';

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function patientAppointmentDiagnosis()
    {
        return $this->belongsTo(PatientAppointmentDiagnosis::class);
    }

    public function inPatient()
    {
        return $this->hasOne(InPatient::class);
    }

    public function appointmentDiagnosisTestResult()
    {
        return $this->hasOne(AppointmentDiagnosisTestResult::class);
    }
}
