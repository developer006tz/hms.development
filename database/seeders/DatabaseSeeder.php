<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(CountrySeeder::class);
        $this->call(HospitalSeeder::class);
        // $this->call(AppointmentDiagnosisTestResultSeeder::class);
        // $this->call(AppointmentDoctorInvoiceSeeder::class);
        // $this->call(AppointmentFeedbackSeeder::class);
        // $this->call(AssetSeeder::class);
        // $this->call(AssetCategorySeeder::class);
        // $this->call(AssetMaintananceSeeder::class);
        // $this->call(AssetTypeSeeder::class);
        // $this->call(AssignmentSeeder::class);
        // $this->call(BloodGroupSeeder::class);
        // $this->call(BuildingSeeder::class);
        // $this->call(CreditSeeder::class);
        // $this->call(DepartmentSeeder::class);
        // $this->call(DiagnosisSeeder::class);
        // $this->call(DiagnosisLaboratorySeeder::class);
        // $this->call(DoctorAppointmentSeeder::class);
        // $this->call(DoctorAppointmentPaymentSeeder::class);
        // $this->call(HospitalSeeder::class);
        // $this->call(HospitalAdminSeeder::class);
        // $this->call(HospitalIdentificationNumbersSeeder::class);
        // $this->call(HospitalTypeSeeder::class);
        // $this->call(InPatientSeeder::class);
        // $this->call(InvoiceSeeder::class);
        // $this->call(LabSeeder::class);
        // $this->call(MaintananceRecordSeeder::class);
        // $this->call(MedicationBillSeeder::class);
        // $this->call(MedicationBillPaymentSeeder::class);
        // $this->call(MedicationRecommendationSeeder::class);
        // $this->call(MedicineSeeder::class);
        // $this->call(MedicineCategorySeeder::class);
        // $this->call(MedicineInvoiceSeeder::class);
        // $this->call(MedicineInvoiceDetailSeeder::class);
        // $this->call(MedicineStockSeeder::class);
        // $this->call(MedicineSupplierSeeder::class);
        // $this->call(MedicineTypeSeeder::class);
        // $this->call(ModuleSeeder::class);
        // $this->call(PackageSeeder::class);
        // $this->call(PatientSeeder::class);
        // $this->call(PatientAppointmentDiagnosisSeeder::class);
        // $this->call(PaymentTypeSeeder::class);
        // $this->call(PhamacySeeder::class);
        // $this->call(PhysiotherapyApplicationSeeder::class);
        // $this->call(PhysiotherapyCategorySeeder::class);
        // $this->call(PhysiotherapyTypeSeeder::class);
        // $this->call(PreliminaryMeasurementSeeder::class);
        // $this->call(SalesPersonSeeder::class);
        // $this->call(StaffSeeder::class);
        // $this->call(StaffTypeSeeder::class);
        // $this->call(SuperAdminSeeder::class);
        // $this->call(UnitTypeSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(WardSeeder::class);
        // $this->call(WardTypeSeeder::class);
    }
}
