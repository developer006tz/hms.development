<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Building extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'building_no',
        'building_name',
        'building_type',
        'no_flow',
        'no_room',
        'building_location',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
