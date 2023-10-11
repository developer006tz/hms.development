<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalesPerson extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'return_type',
        'medicine_id',
        'return_date',
        'customer_information',
        'return_quantity',
        'return_notes',
        'stock_total',
        'phamacy_id',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'sales_people';

    protected $casts = [
        'return_date' => 'date',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function phamacy()
    {
        return $this->belongsTo(Phamacy::class);
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
