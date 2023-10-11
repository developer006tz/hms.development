<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diagnosis extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'diagnosis_name',
        'diagnosis_price',
        'diagnosis_description',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
