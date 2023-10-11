<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lab extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['lab_name', 'lab_desciription', 'hospital_id'];

    protected $searchableFields = ['*'];

    public function patientAppointmentDiagnoses()
    {
        return $this->hasMany(PatientAppointmentDiagnosis::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
