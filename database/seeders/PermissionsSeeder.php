<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create default permissions
        Permission::create(['name' => 'list appointments']);
        Permission::create(['name' => 'view appointments']);
        Permission::create(['name' => 'create appointments']);
        Permission::create(['name' => 'update appointments']);
        Permission::create(['name' => 'delete appointments']);

        Permission::create(['name' => 'list appointmentdiagnosistests']);
        Permission::create(['name' => 'view appointmentdiagnosistests']);
        Permission::create(['name' => 'create appointmentdiagnosistests']);
        Permission::create(['name' => 'update appointmentdiagnosistests']);
        Permission::create(['name' => 'delete appointmentdiagnosistests']);

        Permission::create(['name' => 'list appointmentdiagnosistestresults']);
        Permission::create(['name' => 'view appointmentdiagnosistestresults']);
        Permission::create([
            'name' => 'create appointmentdiagnosistestresults',
        ]);
        Permission::create([
            'name' => 'update appointmentdiagnosistestresults',
        ]);
        Permission::create([
            'name' => 'delete appointmentdiagnosistestresults',
        ]);

        Permission::create(['name' => 'list appointmentdoctorinvoices']);
        Permission::create(['name' => 'view appointmentdoctorinvoices']);
        Permission::create(['name' => 'create appointmentdoctorinvoices']);
        Permission::create(['name' => 'update appointmentdoctorinvoices']);
        Permission::create(['name' => 'delete appointmentdoctorinvoices']);

        Permission::create(['name' => 'list appointmentfeedbacks']);
        Permission::create(['name' => 'view appointmentfeedbacks']);
        Permission::create(['name' => 'create appointmentfeedbacks']);
        Permission::create(['name' => 'update appointmentfeedbacks']);
        Permission::create(['name' => 'delete appointmentfeedbacks']);

        Permission::create(['name' => 'list assets']);
        Permission::create(['name' => 'view assets']);
        Permission::create(['name' => 'create assets']);
        Permission::create(['name' => 'update assets']);
        Permission::create(['name' => 'delete assets']);

        Permission::create(['name' => 'list assetcategories']);
        Permission::create(['name' => 'view assetcategories']);
        Permission::create(['name' => 'create assetcategories']);
        Permission::create(['name' => 'update assetcategories']);
        Permission::create(['name' => 'delete assetcategories']);

        Permission::create(['name' => 'list assetmaintanances']);
        Permission::create(['name' => 'view assetmaintanances']);
        Permission::create(['name' => 'create assetmaintanances']);
        Permission::create(['name' => 'update assetmaintanances']);
        Permission::create(['name' => 'delete assetmaintanances']);

        Permission::create(['name' => 'list assettypes']);
        Permission::create(['name' => 'view assettypes']);
        Permission::create(['name' => 'create assettypes']);
        Permission::create(['name' => 'update assettypes']);
        Permission::create(['name' => 'delete assettypes']);

        Permission::create(['name' => 'list assignments']);
        Permission::create(['name' => 'view assignments']);
        Permission::create(['name' => 'create assignments']);
        Permission::create(['name' => 'update assignments']);
        Permission::create(['name' => 'delete assignments']);

        Permission::create(['name' => 'list bloodgroups']);
        Permission::create(['name' => 'view bloodgroups']);
        Permission::create(['name' => 'create bloodgroups']);
        Permission::create(['name' => 'update bloodgroups']);
        Permission::create(['name' => 'delete bloodgroups']);

        Permission::create(['name' => 'list buildings']);
        Permission::create(['name' => 'view buildings']);
        Permission::create(['name' => 'create buildings']);
        Permission::create(['name' => 'update buildings']);
        Permission::create(['name' => 'delete buildings']);

        Permission::create(['name' => 'list credits']);
        Permission::create(['name' => 'view credits']);
        Permission::create(['name' => 'create credits']);
        Permission::create(['name' => 'update credits']);
        Permission::create(['name' => 'delete credits']);

        Permission::create(['name' => 'list departments']);
        Permission::create(['name' => 'view departments']);
        Permission::create(['name' => 'create departments']);
        Permission::create(['name' => 'update departments']);
        Permission::create(['name' => 'delete departments']);

        Permission::create(['name' => 'list diagnoses']);
        Permission::create(['name' => 'view diagnoses']);
        Permission::create(['name' => 'create diagnoses']);
        Permission::create(['name' => 'update diagnoses']);
        Permission::create(['name' => 'delete diagnoses']);

        Permission::create(['name' => 'list diagnosislaboratories']);
        Permission::create(['name' => 'view diagnosislaboratories']);
        Permission::create(['name' => 'create diagnosislaboratories']);
        Permission::create(['name' => 'update diagnosislaboratories']);
        Permission::create(['name' => 'delete diagnosislaboratories']);

        Permission::create(['name' => 'list doctorappointments']);
        Permission::create(['name' => 'view doctorappointments']);
        Permission::create(['name' => 'create doctorappointments']);
        Permission::create(['name' => 'update doctorappointments']);
        Permission::create(['name' => 'delete doctorappointments']);

        Permission::create(['name' => 'list doctorappointmentpayments']);
        Permission::create(['name' => 'view doctorappointmentpayments']);
        Permission::create(['name' => 'create doctorappointmentpayments']);
        Permission::create(['name' => 'update doctorappointmentpayments']);
        Permission::create(['name' => 'delete doctorappointmentpayments']);

        Permission::create(['name' => 'list hospitals']);
        Permission::create(['name' => 'view hospitals']);
        Permission::create(['name' => 'create hospitals']);
        Permission::create(['name' => 'update hospitals']);
        Permission::create(['name' => 'delete hospitals']);

        Permission::create(['name' => 'list hospitaladmins']);
        Permission::create(['name' => 'view hospitaladmins']);
        Permission::create(['name' => 'create hospitaladmins']);
        Permission::create(['name' => 'update hospitaladmins']);
        Permission::create(['name' => 'delete hospitaladmins']);

        Permission::create(['name' => 'list allhospitalidentificationnumbers']);
        Permission::create(['name' => 'view allhospitalidentificationnumbers']);
        Permission::create([
            'name' => 'create allhospitalidentificationnumbers',
        ]);
        Permission::create([
            'name' => 'update allhospitalidentificationnumbers',
        ]);
        Permission::create([
            'name' => 'delete allhospitalidentificationnumbers',
        ]);

        Permission::create(['name' => 'list hospitaltypes']);
        Permission::create(['name' => 'view hospitaltypes']);
        Permission::create(['name' => 'create hospitaltypes']);
        Permission::create(['name' => 'update hospitaltypes']);
        Permission::create(['name' => 'delete hospitaltypes']);

        Permission::create(['name' => 'list inpatients']);
        Permission::create(['name' => 'view inpatients']);
        Permission::create(['name' => 'create inpatients']);
        Permission::create(['name' => 'update inpatients']);
        Permission::create(['name' => 'delete inpatients']);

        Permission::create(['name' => 'list invoices']);
        Permission::create(['name' => 'view invoices']);
        Permission::create(['name' => 'create invoices']);
        Permission::create(['name' => 'update invoices']);
        Permission::create(['name' => 'delete invoices']);

        Permission::create(['name' => 'list labs']);
        Permission::create(['name' => 'view labs']);
        Permission::create(['name' => 'create labs']);
        Permission::create(['name' => 'update labs']);
        Permission::create(['name' => 'delete labs']);

        Permission::create(['name' => 'list maintanancerecords']);
        Permission::create(['name' => 'view maintanancerecords']);
        Permission::create(['name' => 'create maintanancerecords']);
        Permission::create(['name' => 'update maintanancerecords']);
        Permission::create(['name' => 'delete maintanancerecords']);

        Permission::create(['name' => 'list medicationbills']);
        Permission::create(['name' => 'view medicationbills']);
        Permission::create(['name' => 'create medicationbills']);
        Permission::create(['name' => 'update medicationbills']);
        Permission::create(['name' => 'delete medicationbills']);

        Permission::create(['name' => 'list medicationbillpayments']);
        Permission::create(['name' => 'view medicationbillpayments']);
        Permission::create(['name' => 'create medicationbillpayments']);
        Permission::create(['name' => 'update medicationbillpayments']);
        Permission::create(['name' => 'delete medicationbillpayments']);

        Permission::create(['name' => 'list medicationrecommendations']);
        Permission::create(['name' => 'view medicationrecommendations']);
        Permission::create(['name' => 'create medicationrecommendations']);
        Permission::create(['name' => 'update medicationrecommendations']);
        Permission::create(['name' => 'delete medicationrecommendations']);

        Permission::create(['name' => 'list medicines']);
        Permission::create(['name' => 'view medicines']);
        Permission::create(['name' => 'create medicines']);
        Permission::create(['name' => 'update medicines']);
        Permission::create(['name' => 'delete medicines']);

        Permission::create(['name' => 'list medicinecategories']);
        Permission::create(['name' => 'view medicinecategories']);
        Permission::create(['name' => 'create medicinecategories']);
        Permission::create(['name' => 'update medicinecategories']);
        Permission::create(['name' => 'delete medicinecategories']);

        Permission::create(['name' => 'list medicineinvoices']);
        Permission::create(['name' => 'view medicineinvoices']);
        Permission::create(['name' => 'create medicineinvoices']);
        Permission::create(['name' => 'update medicineinvoices']);
        Permission::create(['name' => 'delete medicineinvoices']);

        Permission::create(['name' => 'list medicineinvoicedetails']);
        Permission::create(['name' => 'view medicineinvoicedetails']);
        Permission::create(['name' => 'create medicineinvoicedetails']);
        Permission::create(['name' => 'update medicineinvoicedetails']);
        Permission::create(['name' => 'delete medicineinvoicedetails']);

        Permission::create(['name' => 'list medicinestocks']);
        Permission::create(['name' => 'view medicinestocks']);
        Permission::create(['name' => 'create medicinestocks']);
        Permission::create(['name' => 'update medicinestocks']);
        Permission::create(['name' => 'delete medicinestocks']);

        Permission::create(['name' => 'list medicinesuppliers']);
        Permission::create(['name' => 'view medicinesuppliers']);
        Permission::create(['name' => 'create medicinesuppliers']);
        Permission::create(['name' => 'update medicinesuppliers']);
        Permission::create(['name' => 'delete medicinesuppliers']);

        Permission::create(['name' => 'list medicinetypes']);
        Permission::create(['name' => 'view medicinetypes']);
        Permission::create(['name' => 'create medicinetypes']);
        Permission::create(['name' => 'update medicinetypes']);
        Permission::create(['name' => 'delete medicinetypes']);

        Permission::create(['name' => 'list modules']);
        Permission::create(['name' => 'view modules']);
        Permission::create(['name' => 'create modules']);
        Permission::create(['name' => 'update modules']);
        Permission::create(['name' => 'delete modules']);

        Permission::create(['name' => 'list packages']);
        Permission::create(['name' => 'view packages']);
        Permission::create(['name' => 'create packages']);
        Permission::create(['name' => 'update packages']);
        Permission::create(['name' => 'delete packages']);

        Permission::create(['name' => 'list patients']);
        Permission::create(['name' => 'view patients']);
        Permission::create(['name' => 'create patients']);
        Permission::create(['name' => 'update patients']);
        Permission::create(['name' => 'delete patients']);

        Permission::create(['name' => 'list patientappointmentdiagnoses']);
        Permission::create(['name' => 'view patientappointmentdiagnoses']);
        Permission::create(['name' => 'create patientappointmentdiagnoses']);
        Permission::create(['name' => 'update patientappointmentdiagnoses']);
        Permission::create(['name' => 'delete patientappointmentdiagnoses']);

        Permission::create(['name' => 'list paymenttypes']);
        Permission::create(['name' => 'view paymenttypes']);
        Permission::create(['name' => 'create paymenttypes']);
        Permission::create(['name' => 'update paymenttypes']);
        Permission::create(['name' => 'delete paymenttypes']);

        Permission::create(['name' => 'list phamacies']);
        Permission::create(['name' => 'view phamacies']);
        Permission::create(['name' => 'create phamacies']);
        Permission::create(['name' => 'update phamacies']);
        Permission::create(['name' => 'delete phamacies']);

        Permission::create(['name' => 'list physiotherapyapplications']);
        Permission::create(['name' => 'view physiotherapyapplications']);
        Permission::create(['name' => 'create physiotherapyapplications']);
        Permission::create(['name' => 'update physiotherapyapplications']);
        Permission::create(['name' => 'delete physiotherapyapplications']);

        Permission::create(['name' => 'list physiotherapycategories']);
        Permission::create(['name' => 'view physiotherapycategories']);
        Permission::create(['name' => 'create physiotherapycategories']);
        Permission::create(['name' => 'update physiotherapycategories']);
        Permission::create(['name' => 'delete physiotherapycategories']);

        Permission::create(['name' => 'list physiotherapytypes']);
        Permission::create(['name' => 'view physiotherapytypes']);
        Permission::create(['name' => 'create physiotherapytypes']);
        Permission::create(['name' => 'update physiotherapytypes']);
        Permission::create(['name' => 'delete physiotherapytypes']);

        Permission::create(['name' => 'list preliminarymeasurements']);
        Permission::create(['name' => 'view preliminarymeasurements']);
        Permission::create(['name' => 'create preliminarymeasurements']);
        Permission::create(['name' => 'update preliminarymeasurements']);
        Permission::create(['name' => 'delete preliminarymeasurements']);

        Permission::create(['name' => 'list salespeople']);
        Permission::create(['name' => 'view salespeople']);
        Permission::create(['name' => 'create salespeople']);
        Permission::create(['name' => 'update salespeople']);
        Permission::create(['name' => 'delete salespeople']);

        Permission::create(['name' => 'list allstaff']);
        Permission::create(['name' => 'view allstaff']);
        Permission::create(['name' => 'create allstaff']);
        Permission::create(['name' => 'update allstaff']);
        Permission::create(['name' => 'delete allstaff']);

        Permission::create(['name' => 'list stafftypes']);
        Permission::create(['name' => 'view stafftypes']);
        Permission::create(['name' => 'create stafftypes']);
        Permission::create(['name' => 'update stafftypes']);
        Permission::create(['name' => 'delete stafftypes']);

        Permission::create(['name' => 'list superadmins']);
        Permission::create(['name' => 'view superadmins']);
        Permission::create(['name' => 'create superadmins']);
        Permission::create(['name' => 'update superadmins']);
        Permission::create(['name' => 'delete superadmins']);

        Permission::create(['name' => 'list unittypes']);
        Permission::create(['name' => 'view unittypes']);
        Permission::create(['name' => 'create unittypes']);
        Permission::create(['name' => 'update unittypes']);
        Permission::create(['name' => 'delete unittypes']);

        Permission::create(['name' => 'list wards']);
        Permission::create(['name' => 'view wards']);
        Permission::create(['name' => 'create wards']);
        Permission::create(['name' => 'update wards']);
        Permission::create(['name' => 'delete wards']);

        Permission::create(['name' => 'list wardtypes']);
        Permission::create(['name' => 'view wardtypes']);
        Permission::create(['name' => 'create wardtypes']);
        Permission::create(['name' => 'update wardtypes']);
        Permission::create(['name' => 'delete wardtypes']);

        // Create user role and assign existing permissions
        $currentPermissions = Permission::all();
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo($currentPermissions);

        // Create admin exclusive permissions
        Permission::create(['name' => 'list roles']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        Permission::create(['name' => 'list permissions']);
        Permission::create(['name' => 'view permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // Create admin role and assign all permissions
        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole->givePermissionTo($allPermissions);

        $user = \App\Models\User::whereEmail('admin@admin.com')->first();

        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}
