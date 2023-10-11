<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WardType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'ward_type_name',
        'ward_type_description',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'ward_types';

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function ward()
    {
        return $this->hasOne(Ward::class);
    }
}
