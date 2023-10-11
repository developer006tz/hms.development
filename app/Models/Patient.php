<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'patient_no',
        'patient_middlename',
        'patient_firstname',
        'patient_lastname',
        'patient_email',
        'patient_address',
        'patient_phonenumber',
        'patient_gender',
        'patient_dob',
        'patient_city',
        'patient_zipcode',
        'patient_country',
        'patient_nationality',
        'patient_password',
        'patient_default_password',
        'patient_photo',
        'blood_group_id',
        'hospital_id',
        'user_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'patient_dob' => 'date',
    ];

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function doctorAppointments()
    {
        return $this->hasMany(DoctorAppointment::class);
    }

    public function appointmentFeedbacks()
    {
        return $this->hasMany(AppointmentFeedback::class);
    }

    public function medicineInvoices()
    {
        return $this->hasMany(MedicineInvoice::class);
    }

    public function inPatients()
    {
        return $this->hasMany(InPatient::class);
    }

    public function preliminaryMeasurements()
    {
        return $this->hasMany(PreliminaryMeasurement::class);
    }

    public function medicationBills()
    {
        return $this->hasMany(MedicationBill::class);
    }

    public function medicineInvoiceDetails()
    {
        return $this->hasMany(MedicineInvoiceDetail::class);
    }

    public function appointmentDoctorInvoice()
    {
        return $this->hasOne(AppointmentDoctorInvoice::class);
    }

    public function medicationBillPayments()
    {
        return $this->hasMany(MedicationBillPayment::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function medicationRecommendations()
    {
        return $this->hasMany(MedicationRecommendation::class);
    }

    public function patientAppointmentDiagnoses()
    {
        return $this->hasMany(PatientAppointmentDiagnosis::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function physiotherapyApplications()
    {
        return $this->belongsToMany(PhysiotherapyApplication::class);
    }
}
