<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BloodGroup extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'blood_group_name',
        'blood_group_description',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'blood_groups';

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
