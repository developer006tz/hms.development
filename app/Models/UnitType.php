<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UnitType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['hospital_id'];

    protected $searchableFields = ['*'];

    protected $table = 'unit_types';

    public function medicine()
    {
        return $this->hasOne(Medicine::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
