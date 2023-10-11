<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\AppointmentDiagnosisTestResult;
use App\Http\Resources\AppointmentDiagnosisTestResultResource;
use App\Http\Resources\AppointmentDiagnosisTestResultCollection;

class AppointmentDiagnosisTestResultController extends Controller
{
    public function index(
        Request $request
    ): AppointmentDiagnosisTestResultCollection {
        $this->authorize('view-any', AppointmentDiagnosisTestResult::class);

        $search = $request->get('search', '');

        $appointmentDiagnosisTestResults = AppointmentDiagnosisTestResult::search(
            $search
        )
            ->latest()
            ->paginate();

        return new AppointmentDiagnosisTestResultCollection(
            $appointmentDiagnosisTestResults
        );
    }

    public function store(
        Request $request
    ): AppointmentDiagnosisTestResultResource {
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

        return new AppointmentDiagnosisTestResultResource(
            $appointmentDiagnosisTestResult
        );
    }

    public function show(
        Request $request,
        AppointmentDiagnosisTestResult $appointmentDiagnosisTestResult
    ): AppointmentDiagnosisTestResultResource {
        $this->authorize('view', $appointmentDiagnosisTestResult);

        return new AppointmentDiagnosisTestResultResource(
            $appointmentDiagnosisTestResult
        );
    }

    public function update(
        Request $request,
        AppointmentDiagnosisTestResult $appointmentDiagnosisTestResult
    ): AppointmentDiagnosisTestResultResource {
        $this->authorize('update', $appointmentDiagnosisTestResult);

        $validated = $request->validate([
            'appointment_diagnosis_test_id' => ['required', 'max:255'],
            'staff_id' => ['required', 'exists:staffs,id'],
            'patient_id' => ['required', 'max:255'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $appointmentDiagnosisTestResult->update($validated);

        return new AppointmentDiagnosisTestResultResource(
            $appointmentDiagnosisTestResult
        );
    }

    public function destroy(
        Request $request,
        AppointmentDiagnosisTestResult $appointmentDiagnosisTestResult
    ): Response {
        $this->authorize('delete', $appointmentDiagnosisTestResult);

        $appointmentDiagnosisTestResult->delete();

        return response()->noContent();
    }
}
