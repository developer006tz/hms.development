<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicineInvoice extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'patient_id',
        'invoice_no',
        'invoice_balance',
        'invoice_tin_no',
        'payment_type_id',
        'invoice_LPO_no',
        'invoice_person',
        'invoice_to',
        'phamacy_id',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'medicine_invoices';

    public function phamacy()
    {
        return $this->belongsTo(Phamacy::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function medicineInvoiceDetail()
    {
        return $this->hasOne(MedicineInvoiceDetail::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }
}
