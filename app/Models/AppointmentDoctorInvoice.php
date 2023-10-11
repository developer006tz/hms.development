<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppointmentDoctorInvoice extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'patient_id',
        'balance',
        'paid_amount',
        'description',
        'remark',
        'status',
        'doctor_appointment_id',
        'hospital_id',
        'staff_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'appointment_doctor_invoices';

    public function doctorAppointment()
    {
        return $this->belongsTo(DoctorAppointment::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
