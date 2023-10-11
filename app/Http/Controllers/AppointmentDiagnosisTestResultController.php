<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Hospital;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\AppointmentDiagnosisTestResult;

class AppointmentDiagnosisTestResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', AppointmentDiagnosisTestResult::class);

        $search = $request->get('search', '');

        $appointmentDiagnosisTestResults = AppointmentDiagnosisTestResult::search(
            $search
        )
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.appt_diag_test_res.index',
            compact('appointmentDiagnosisTestResults', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', AppointmentDiagnosisTestResult::class);

        $allStaff = Staff::pluck('staff_no', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.appt_diag_test_res.create',
            compact('allStaff', 'hospitals')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', AppointmentDiagnosisTestResult::class);

        $validated = $request->validate([
            'appointment_diagnosis_test_id' => ['required', 'max:255'],
            'staff_id' => ['required', 'exists:staffs,id'],
            'patient_id' => ['required', 'max:255'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $appointmentDiagnosisTestResult = AppointmentDiagnosisTestResult::create(
            $validated
        );

        return redirect()
            ->route(
                'appt_diag_test_res.edit',
                $appointmentDiagnosisTestResult
            )
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Request $request,
        AppointmentDiagnosisTestResult $appointmentDiagnosisTestResult
    ): View {
        $this->authorize('view', $appointmentDiagnosisTestResult);

        return view(
            'app.appt_diag_test_res.show',
            compact('appointmentDiagnosisTestResult')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(
        Request $request,
        AppointmentDiagnosisTestResult $appointmentDiagnosisTestResult
    ): View {
        $this->authorize('update', $appointmentDiagnosisTestResult);

        $allStaff = Staff::pluck('staff_no', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.appt_diag_test_res.edit',
            compact('appointmentDiagnosisTestResult', 'allStaff', 'hospitals')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        AppointmentDiagnosisTestResult $appointmentDiagnosisTestResult
    ): RedirectResponse {
        $this->authorize('update', $appointmentDiagnosisTestResult);

        $validated = $request->validate([
            'appointment_diagnosis_test_id' => ['required', 'max:255'],
            'staff_id' => ['required', 'exists:staffs,id'],
            'patient_id' => ['required', 'max:255'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $appointmentDiagnosisTestResult->update($validated);

        return redirect()
            ->route(
                'appt_diag_test_res.edit',
                $appointmentDiagnosisTestResult
            )
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        AppointmentDiagnosisTestResult $appointmentDiagnosisTestResult
    ): RedirectResponse {
        $this->authorize('delete', $appointmentDiagnosisTestResult);

        $appointmentDiagnosisTestResult->delete();

        return redirect()
            ->route('appt_diag_test_res.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
