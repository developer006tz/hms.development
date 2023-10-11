<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicationBill extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'bill_type',
        'quantity',
        'price',
        'patient_id',
        'description',
        'status',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'medication_bills';

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
