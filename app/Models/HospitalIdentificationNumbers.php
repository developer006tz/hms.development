<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HospitalIdentificationNumbers extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['prefix', 'hospital_id'];

    protected $searchableFields = ['*'];

    protected $table = 'hospital_identification_numbers';

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
