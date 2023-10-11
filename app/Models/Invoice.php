<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'patient_id',
        'invoice_balance',
        'paid_ammount',
        'remark',
        'appointment_id',
        'invoice_status',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function medicationBillPayment()
    {
        return $this->hasOne(MedicationBillPayment::class);
    }
}
