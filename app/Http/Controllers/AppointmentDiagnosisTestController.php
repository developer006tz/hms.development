<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\AppointmentDiagnosisTest;
use App\Models\PatientAppointmentDiagnosis;

class AppointmentDiagnosisTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', AppointmentDiagnosisTest::class);

        $search = $request->get('search', '');

        $appointmentDiagnosisTests = AppointmentDiagnosisTest::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.appointment_diagnosis_tests.index',
            compact('appointmentDiagnosisTests', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', AppointmentDiagnosisTest::class);

        $patientAppointmentDiagnoses = PatientAppointmentDiagnosis::pluck(
            'status',
            'id'
        );
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.appointment_diagnosis_tests.create',
            compact('patientAppointmentDiagnoses', 'hospitals')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', AppointmentDiagnosisTest::class);

        $validated = $request->validate([
            'patient_appointment_diagnosis_id' => [
                'required',
                'exists:patient_appointment_diagnoses,id',
            ],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $appointmentDiagnosisTest = AppointmentDiagnosisTest::create(
            $validated
        );

        return redirect()
            ->route(
                'appointment-diagnosis-tests.edit',
                $appointmentDiagnosisTest
            )
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Request $request,
        AppointmentDiagnosisTest $appointmentDiagnosisTest
    ): View {
        $this->authorize('view', $appointmentDiagnosisTest);

        return view(
            'app.appointment_diagnosis_tests.show',
            compact('appointmentDiagnosisTest')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(
        Request $request,
        AppointmentDiagnosisTest $appointmentDiagnosisTest
    ): View {
        $this->authorize('update', $appointmentDiagnosisTest);

        $patientAppointmentDiagnoses = PatientAppointmentDiagnosis::pluck(
            'status',
            'id'
        );
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.appointment_diagnosis_tests.edit',
            compact(
                'appointmentDiagnosisTest',
                'patientAppointmentDiagnoses',
                'hospitals'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        AppointmentDiagnosisTest $appointmentDiagnosisTest
    ): RedirectResponse {
        $this->authorize('update', $appointmentDiagnosisTest);

        $validated = $request->validate([
            'patient_appointment_diagnosis_id' => [
                'required',
                'exists:patient_appointment_diagnoses,id',
            ],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $appointmentDiagnosisTest->update($validated);

        return redirect()
            ->route(
                'appointment-diagnosis-tests.edit',
                $appointmentDiagnosisTest
            )
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        AppointmentDiagnosisTest $appointmentDiagnosisTest
    ): RedirectResponse {
        $this->authorize('delete', $appointmentDiagnosisTest);

        $appointmentDiagnosisTest->delete();

        return redirect()
            ->route('appointment-diagnosis-tests.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
