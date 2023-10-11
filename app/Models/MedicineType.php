<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicineType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['medicine_type_name', 'hospital_id'];

    protected $searchableFields = ['*'];

    protected $table = 'medicine_types';

    public function medicine()
    {
        return $this->hasOne(Medicine::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
