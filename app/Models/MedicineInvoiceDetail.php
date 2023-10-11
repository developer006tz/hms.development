<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicineInvoiceDetail extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'medicine_id',
        'quantity',
        'price',
        'patient_id',
        'patient_name',
        'discount',
        'phamacy_id',
        'hospital_id',
        'medicine_invoice_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'medicine_invoice_details';

    public function medicineInvoice()
    {
        return $this->belongsTo(MedicineInvoice::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function phamacy()
    {
        return $this->belongsTo(Phamacy::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function medicine2()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id');
    }
}
