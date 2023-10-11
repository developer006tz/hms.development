<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppointmentDiagnosisTestResult extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'appointment_diagnosis_test_id',
        'staff_id',
        'patient_id',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'appt_diag_test_res';

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function appointmentDiagnosisTest()
    {
        return $this->belongsTo(AppointmentDiagnosisTest::class);
    }
}
