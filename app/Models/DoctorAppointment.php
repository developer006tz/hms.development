<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoctorAppointment extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'appointment_datetime',
        'doctor_appoitment_description',
        'doctor_appointment_status',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'doctor_appointments';

    protected $casts = [
        'appointment_datetime' => 'datetime',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'doctor_id');
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function appointmentDoctorInvoice()
    {
        return $this->hasOne(AppointmentDoctorInvoice::class);
    }

    public function appointment2()
    {
        return $this->hasOne(
            AppointmentFeedback::class,
            'doctor_appointment_id'
        );
    }

    public function doctorAppointmentPayment()
    {
        return $this->hasOne(DoctorAppointmentPayment::class);
    }
}
