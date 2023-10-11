<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicine extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'medicine_name',
        'medicine_amount',
        'medicine_type_id',
        'medicine_expire_date',
        'medicine_barcode',
        'medicine_generic_name',
        'medicine_description',
        'medicine_image',
        'medicine_status',
        'medicine_manufacture',
        'medicine_manufacture_date',
        'medicine_entry_date',
        'medicine_discount',
        'hospital_id',
        'phamacy_id',
        'unit_type_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'medicine_expire_date' => 'date',
        'medicine_manufacture_date' => 'date',
        'medicine_entry_date' => 'date',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function phamacy()
    {
        return $this->belongsTo(Phamacy::class);
    }

    public function unitType()
    {
        return $this->belongsTo(UnitType::class);
    }

    public function medicineType()
    {
        return $this->belongsTo(MedicineType::class);
    }

    public function salesPeople()
    {
        return $this->hasMany(SalesPerson::class);
    }

    public function medicationRecommendations()
    {
        return $this->hasMany(MedicationRecommendation::class);
    }

    public function medicineInvoiceDetails()
    {
        return $this->hasMany(MedicineInvoiceDetail::class);
    }

    public function medicineSuppliers()
    {
        return $this->belongsToMany(
            MedicineSupplier::class,
            'medicine_medicinesupplier'
        );
    }
}
