<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'department_name',
        'department_description',
        'department_phonenumer',
        'department_location',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    public function allStaff()
    {
        return $this->hasMany(Staff::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function diagnosisLaboratories()
    {
        return $this->hasMany(DiagnosisLaboratory::class);
    }

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class);
    }
}
