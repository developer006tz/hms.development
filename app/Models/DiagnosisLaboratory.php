<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiagnosisLaboratory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'lab_no',
        'diagnosis_laboratory_name',
        'diagnosis_laboratory_location',
        'department_id',
        'lab_type',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'diagnosis_laboratories';

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
