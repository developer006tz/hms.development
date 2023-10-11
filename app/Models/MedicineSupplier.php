<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicineSupplier extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'supplier_name',
        'supplier_email',
        'supplier_phonenumber',
        'supplier_address',
        'supplier_city',
        'supplier_country',
        'phamacy_id',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'medicine_suppliers';

    public function phamacy()
    {
        return $this->belongsTo(Phamacy::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function medicineStocks()
    {
        return $this->hasMany(MedicineStock::class);
    }

    public function medicines()
    {
        return $this->belongsToMany(
            Medicine::class,
            'medicine_medicinesupplier'
        );
    }
}
