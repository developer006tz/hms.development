<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Staff;
use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\View\View;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\PatientAppointmentDiagnosis;

class PatientAppointmentDiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', PatientAppointmentDiagnosis::class);

        $search = $request->get('search', '');

        $patientAppointmentDiagnoses = PatientAppointmentDiagnosis::search(
            $search
        )
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.patient_appointment_diagnoses.index',
            compact('patientAppointmentDiagnoses', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', PatientAppointmentDiagnosis::class);

        $patients = Patient::pluck('patient_no', 'id');
        $allStaff = Staff::pluck('staff_no', 'id');
        $labs = Lab::pluck('lab_name', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');
        $appointments = Appointment::pluck('insuarance_status', 'id');

        return view(
            'app.patient_appointment_diagnoses.create',
            compact('patients', 'allStaff', 'labs', 'hospitals', 'appointments')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', PatientAppointmentDiagnosis::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'doctor_id' => ['required', 'exists:staffs,id'],
            'symptoms' => ['required', 'max:255', 'string'],
            'diagnosis_description' => ['nullable', 'max:255', 'string'],
            'lab_id' => ['required', 'exists:labs,id'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
            'status' => ['nullable', 'max:255', 'string'],
            'appointment_id' => ['required', 'exists:appointments,id'],
        ]);

        $patientAppointmentDiagnosis = PatientAppointmentDiagnosis::create(
            $validated
        );

        return redirect()
            ->route(
                'patient-appointment-diagnoses.edit',
                $patientAppointmentDiagnosis
            )
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Request $request,
        PatientAppointmentDiagnosis $patientAppointmentDiagnosis
    ): View {
        $this->authorize('view', $patientAppointmentDiagnosis);

        return view(
            'app.patient_appointment_diagnoses.show',
            compact('patientAppointmentDiagnosis')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(
        Request $request,
        PatientAppointmentDiagnosis $patientAppointmentDiagnosis
    ): View {
        $this->authorize('update', $patientAppointmentDiagnosis);

        $patients = Patient::pluck('patient_no', 'id');
        $allStaff = Staff::pluck('staff_no', 'id');
        $labs = Lab::pluck('lab_name', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');
        $appointments = Appointment::pluck('insuarance_status', 'id');

        return view(
            'app.patient_appointment_diagnoses.edit',
            compact(
                'patientAppointmentDiagnosis',
                'patients',
                'allStaff',
                'labs',
                'hospitals',
                'appointments'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        PatientAppointmentDiagnosis $patientAppointmentDiagnosis
    ): RedirectResponse {
        $this->authorize('update', $patientAppointmentDiagnosis);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'doctor_id' => ['required', 'exists:staffs,id'],
            'symptoms' => ['required', 'max:255', 'string'],
            'diagnosis_description' => ['nullable', 'max:255', 'string'],
            'lab_id' => ['required', 'exists:labs,id'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
            'status' => ['nullable', 'max:255', 'string'],
            'appointment_id' => ['required', 'exists:appointments,id'],
        ]);

        $patientAppointmentDiagnosis->update($validated);

        return redirect()
            ->route(
                'patient-appointment-diagnoses.edit',
                $patientAppointmentDiagnosis
            )
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        PatientAppointmentDiagnosis $patientAppointmentDiagnosis
    ): RedirectResponse {
        $this->authorize('delete', $patientAppointmentDiagnosis);

        $patientAppointmentDiagnosis->delete();

        return redirect()
            ->route('patient-appointment-diagnoses.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
