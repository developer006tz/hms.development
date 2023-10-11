<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ward extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'ward_no',
        'ward_type_id',
        'ward_description',
        'ward_name',
        'ward_location',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function wardType()
    {
        return $this->belongsTo(WardType::class);
    }
}
