<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoctorAppointmentPayment extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'doctor_appointment_id',
        'amount_paid',
        'payment_day',
        'patient_id',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'doctor_appointment_payments';

    public function doctorAppointment()
    {
        return $this->belongsTo(DoctorAppointment::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
