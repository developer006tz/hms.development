<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicationBillPayment extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'patient_id',
        'amount',
        'invoice_id',
        'appointment_id',
        'payment_type_id',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'medication_bill_payments';

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
