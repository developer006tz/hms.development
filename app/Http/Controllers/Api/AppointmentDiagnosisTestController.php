<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\AppointmentDiagnosisTest;
use App\Http\Resources\AppointmentDiagnosisTestResource;
use App\Http\Resources\AppointmentDiagnosisTestCollection;

class AppointmentDiagnosisTestController extends Controller
{
    public function index(Request $request): AppointmentDiagnosisTestCollection
    {
        $this->authorize('view-any', AppointmentDiagnosisTest::class);

        $search = $request->get('search', '');

        $appointmentDiagnosisTests = AppointmentDiagnosisTest::search($search)
            ->latest()
            ->paginate();

        return new AppointmentDiagnosisTestCollection(
            $appointmentDiagnosisTests
        );
    }

    public function store(Request $request): AppointmentDiagnosisTestResource
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

        return new AppointmentDiagnosisTestResource($appointmentDiagnosisTest);
    }

    public function show(
        Request $request,
        AppointmentDiagnosisTest $appointmentDiagnosisTest
    ): AppointmentDiagnosisTestResource {
        $this->authorize('view', $appointmentDiagnosisTest);

        return new AppointmentDiagnosisTestResource($appointmentDiagnosisTest);
    }

    public function update(
        Request $request,
        AppointmentDiagnosisTest $appointmentDiagnosisTest
    ): AppointmentDiagnosisTestResource {
        $this->authorize('update', $appointmentDiagnosisTest);

        $validated = $request->validate([
            'patient_appointment_diagnosis_id' => [
                'required',
                'exists:patient_appointment_diagnoses,id',
            ],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $appointmentDiagnosisTest->update($validated);

        return new AppointmentDiagnosisTestResource($appointmentDiagnosisTest);
    }

    public function destroy(
        Request $request,
        AppointmentDiagnosisTest $appointmentDiagnosisTest
    ): Response {
        $this->authorize('delete', $appointmentDiagnosisTest);

        $appointmentDiagnosisTest->delete();

        return response()->noContent();
    }
}
