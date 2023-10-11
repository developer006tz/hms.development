<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'payment_type_name',
        'payment_type_description',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'payment_types';

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function medicineInvoice()
    {
        return $this->hasOne(MedicineInvoice::class);
    }

    public function medicationBillPayments()
    {
        return $this->hasMany(MedicationBillPayment::class);
    }
}
