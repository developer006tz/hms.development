<?php

namespace App\Http\Controllers\Api;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentResource;
use App\Http\Resources\AppointmentCollection;

class AppointmentController extends Controller
{
    public function index(Request $request): AppointmentCollection
    {
        $this->authorize('view-any', Appointment::class);

        $search = $request->get('search', '');

        $appointments = Appointment::search($search)
            ->latest()
            ->paginate();

        return new AppointmentCollection($appointments);
    }

    public function store(Request $request): AppointmentResource
    {
        $this->authorize('create', Appointment::class);

        $validated = $request->validate([
            'receptionist_id' => ['required', 'max:255'],
            'doctor_id' => ['required', 'exists:staffs,id'],
            'appointment_datetime' => ['required', 'date'],
            'appointment_status' => [
                'nullable',
                'in:pending,canceled,transfer,accept',
            ],
            'insuarance_status' => ['nullable', 'max:255', 'string'],
            'amount' => ['required', 'numeric'],
            'remark_status' => ['nullable', 'max:255', 'string'],
            'patient_id' => ['required', 'exists:patients,id'],
            'preliminary_measurement_id' => [
                'required',
                'exists:preliminary_measurements,id',
            ],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $appointment = Appointment::create($validated);

        return new AppointmentResource($appointment);
    }

    public function show(
        Request $request,
        Appointment $appointment
    ): AppointmentResource {
        $this->authorize('view', $appointment);

        return new AppointmentResource($appointment);
    }

    public function update(
        Request $request,
        Appointment $appointment
    ): AppointmentResource {
        $this->authorize('update', $appointment);

        $validated = $request->validate([
            'receptionist_id' => ['required', 'max:255'],
            'doctor_id' => ['required', 'exists:staffs,id'],
            'appointment_datetime' => ['required', 'date'],
            'appointment_status' => [
                'nullable',
                'in:pending,canceled,transfer,accept',
            ],
            'insuarance_status' => ['nullable', 'max:255', 'string'],
            'amount' => ['required', 'numeric'],
            'remark_status' => ['nullable', 'max:255', 'string'],
            'patient_id' => ['required', 'exists:patients,id'],
            'preliminary_measurement_id' => [
                'required',
                'exists:preliminary_measurements,id',
            ],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $appointment->update($validated);

        return new AppointmentResource($appointment);
    }

    public function destroy(
        Request $request,
        Appointment $appointment
    ): Response {
        $this->authorize('delete', $appointment);

        $appointment->delete();

        return response()->noContent();
    }
}
