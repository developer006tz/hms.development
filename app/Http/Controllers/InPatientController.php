<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Hospital;
use App\Models\InPatient;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\AppointmentDiagnosisTest;

class InPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', InPatient::class);

        $search = $request->get('search', '');

        $inPatients = InPatient::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.in_patients.index', compact('inPatients', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', InPatient::class);

        $patients = Patient::pluck('patient_no', 'id');
        $appointmentDiagnosisTests = AppointmentDiagnosisTest::pluck(
            'id',
            'id'
        );
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.in_patients.create',
            compact('patients', 'appointmentDiagnosisTests', 'hospitals')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', InPatient::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'appointment_diagnosis_test_id' => [
                'required',
                'exists:appointment_diagnosis_tests,id',
            ],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $inPatient = InPatient::create($validated);

        return redirect()
            ->route('in-patients.edit', $inPatient)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, InPatient $inPatient): View
    {
        $this->authorize('view', $inPatient);

        return view('app.in_patients.show', compact('inPatient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, InPatient $inPatient): View
    {
        $this->authorize('update', $inPatient);

        $patients = Patient::pluck('patient_no', 'id');
        $appointmentDiagnosisTests = AppointmentDiagnosisTest::pluck(
            'id',
            'id'
        );
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.in_patients.edit',
            compact(
                'inPatient',
                'patients',
                'appointmentDiagnosisTests',
                'hospitals'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        InPatient $inPatient
    ): RedirectResponse {
        $this->authorize('update', $inPatient);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'appointment_diagnosis_test_id' => [
                'required',
                'exists:appointment_diagnosis_tests,id',
            ],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $inPatient->update($validated);

        return redirect()
            ->route('in-patients.edit', $inPatient)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        InPatient $inPatient
    ): RedirectResponse {
        $this->authorize('delete', $inPatient);

        $inPatient->delete();

        return redirect()
            ->route('in-patients.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
