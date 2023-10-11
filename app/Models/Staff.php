<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'staff_no',
        'staff_firstname',
        'staff_middlename',
        'staff_lastname',
        'staff_address',
        'staff_photo',
        'staff_email',
        'staff_document',
        'staff_bio',
        'department_id',
        'staff_gender',
        'hospital_id',
        'staff_type_id',
        'user_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'staffs';

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function staffType()
    {
        return $this->belongsTo(StaffType::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }

    public function doctorAppointments()
    {
        return $this->hasMany(DoctorAppointment::class, 'doctor_id');
    }

    public function appointmentFeedbacks()
    {
        return $this->hasMany(AppointmentFeedback::class, 'doctor_id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

    public function preliminaryMeasurements()
    {
        return $this->hasMany(PreliminaryMeasurement::class);
    }

    public function medicationRecommendations()
    {
        return $this->hasMany(MedicationRecommendation::class);
    }

    public function appointmentDiagnosisTestResults()
    {
        return $this->hasMany(AppointmentDiagnosisTestResult::class);
    }

    public function appointmentDoctorInvoice()
    {
        return $this->hasOne(AppointmentDoctorInvoice::class);
    }

    public function patientAppointmentDiagnoses()
    {
        return $this->hasMany(PatientAppointmentDiagnosis::class, 'doctor_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inPatient()
    {
        return $this->hasMany(InPatient::class, 'doctor_id');
    }

    public function physiotherapyApplications()
    {
        return $this->hasMany(PhysiotherapyApplication::class, 'doctor_id');
    }
}
