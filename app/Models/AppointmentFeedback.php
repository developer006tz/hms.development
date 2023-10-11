<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppointmentFeedback extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'doctor_appointment_id',
        'patient_id',
        'description',
        'status',
        'hospital_id',
        'doctor_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'appointment_feedbacks';

    public function doctorAppointment()
    {
        return $this->belongsTo(DoctorAppointment::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'doctor_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
