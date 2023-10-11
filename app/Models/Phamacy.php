<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phamacy extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'phamacy_name',
        'phamacy_address',
        'phamacy_licence',
        'phamacy_phoneumber',
        'phamacy_email',
        'phamacy_branch',
        'phamacy_approval_document',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }

    public function medicineInvoices()
    {
        return $this->hasMany(MedicineInvoice::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function salesPeople()
    {
        return $this->hasMany(SalesPerson::class);
    }

    public function medicineSuppliers()
    {
        return $this->hasMany(MedicineSupplier::class);
    }

    public function medicineStocks()
    {
        return $this->hasMany(MedicineStock::class);
    }

    public function medicineInvoiceDetails()
    {
        return $this->hasMany(MedicineInvoiceDetail::class);
    }
}
