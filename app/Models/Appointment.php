<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'receptionist_id',
        'doctor_id',
        'appointment_datetime',
        'appointment_status',
        'insuarance_status',
        'amount',
        'remark_status',
        'patient_id',
        'preliminary_measurement_id',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'appointment_datetime' => 'datetime',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'doctor_id');
    }

    public function preliminaryMeasurement()
    {
        return $this->belongsTo(PreliminaryMeasurement::class);
    }

    public function patientAppointmentDiagnosis()
    {
        return $this->hasOne(PatientAppointmentDiagnosis::class);
    }

    public function medicationBillPayment()
    {
        return $this->hasOne(MedicationBillPayment::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }
}
