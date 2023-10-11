<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospital extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'hospital_name',
        'hospital_logo',
        'hospital_location',
        'hospital_address_one',
        'hospital_address_two',
        'hospital_tinnumber',
        'hospital_phonenumber',
        'hospital_email',
        'hospital_city',
        'hospital_country',
        'hospital_zipcode',
        'hospital_fax',
        'hospital_website_link',
        'hospital_type_id',
        'package_id',
    ];

    protected $searchableFields = ['*'];

    public function allHospitalIdentificationNumbers()
    {
        return $this->hasMany(HospitalIdentificationNumbers::class);
    }

    public function hospitalType()
    {
        return $this->belongsTo(HospitalType::class);
    }

    public function allStaff()
    {
        return $this->hasMany(Staff::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function bloodGroups()
    {
        return $this->hasMany(BloodGroup::class);
    }

    public function diagnoses()
    {
        return $this->hasMany(Diagnosis::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function patientAppointmentDiagnoses()
    {
        return $this->hasMany(PatientAppointmentDiagnosis::class);
    }

    public function doctorAppointments()
    {
        return $this->hasMany(DoctorAppointment::class);
    }

    public function appointmentDoctorInvoices()
    {
        return $this->hasMany(AppointmentDoctorInvoice::class);
    }

    public function doctorAppointmentPayments()
    {
        return $this->hasMany(DoctorAppointmentPayment::class);
    }

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function assetTypes()
    {
        return $this->hasMany(AssetType::class);
    }

    public function assetCategories()
    {
        return $this->hasMany(AssetCategory::class);
    }

    public function buildings()
    {
        return $this->hasMany(Building::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function assetMaintanances()
    {
        return $this->hasMany(AssetMaintanance::class);
    }

    public function maintananceRecords()
    {
        return $this->hasMany(MaintananceRecord::class);
    }

    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

    public function inPatients()
    {
        return $this->hasMany(InPatient::class);
    }

    public function wardTypes()
    {
        return $this->hasMany(WardType::class);
    }

    public function wards()
    {
        return $this->hasMany(Ward::class);
    }

    public function physiotherapyApplications()
    {
        return $this->hasMany(PhysiotherapyApplication::class);
    }

    public function physiotherapyTypes()
    {
        return $this->hasMany(PhysiotherapyType::class);
    }

    public function paymentTypes()
    {
        return $this->hasMany(PaymentType::class);
    }

    public function appointmentDiagnosisTestResults()
    {
        return $this->hasMany(AppointmentDiagnosisTestResult::class);
    }

    public function diagnosisLaboratories()
    {
        return $this->hasMany(DiagnosisLaboratory::class);
    }

    public function appointmentFeedbacks()
    {
        return $this->hasMany(AppointmentFeedback::class);
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function preliminaryMeasurements()
    {
        return $this->hasMany(PreliminaryMeasurement::class);
    }

    public function appointmentDiagnosisTests()
    {
        return $this->hasMany(AppointmentDiagnosisTest::class);
    }

    public function phamacies()
    {
        return $this->hasMany(Phamacy::class);
    }

    public function medicineStocks()
    {
        return $this->hasMany(MedicineStock::class);
    }

    public function salesPeople()
    {
        return $this->hasMany(SalesPerson::class);
    }

    public function medicineInvoiceDetails()
    {
        return $this->hasMany(MedicineInvoiceDetail::class);
    }

    public function medicineSuppliers()
    {
        return $this->hasMany(MedicineSupplier::class);
    }

    public function medicineInvoices()
    {
        return $this->hasMany(MedicineInvoice::class);
    }

    public function physiotherapyCategories()
    {
        return $this->hasMany(PhysiotherapyCategory::class);
    }

    public function medicationBills()
    {
        return $this->hasMany(MedicationBill::class);
    }

    public function labs()
    {
        return $this->hasMany(Lab::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function medicationRecommendations()
    {
        return $this->hasMany(MedicationRecommendation::class);
    }

    public function medicationBillPayments()
    {
        return $this->hasMany(MedicationBillPayment::class);
    }

    public function medicineCategories()
    {
        return $this->hasMany(MedicineCategory::class);
    }

    public function medicineTypes()
    {
        return $this->hasMany(MedicineType::class);
    }

    public function unitTypes()
    {
        return $this->hasMany(UnitType::class);
    }

    public function hospitalAdmins()
    {
        return $this->hasMany(HospitalAdmin::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function packages()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }
}
