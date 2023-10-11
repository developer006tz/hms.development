<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicineStock extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'stock_batch',
        'stock_initial_quantity',
        'stock_available_quantity',
        'stock_entry_date',
        'stock_expire_date',
        'stock_remark',
        'stock_reorder-level',
        'stock_expire_alert',
        'medicine_supplier_id',
        'phamacy_id',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'medicine_stocks';

    protected $casts = [
        'stock_entry_date' => 'date',
        'stock_expire_date' => 'date',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function phamacy()
    {
        return $this->belongsTo(Phamacy::class);
    }

    public function medicineSupplier()
    {
        return $this->belongsTo(MedicineSupplier::class);
    }
}
