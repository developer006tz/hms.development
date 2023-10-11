<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\View\View;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\PreliminaryMeasurement;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Appointment::class);

        $search = $request->get('search', '');

        $appointments = Appointment::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.appointments.index',
            compact('appointments', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Appointment::class);

        $allStaff = Staff::pluck('staff_no', 'id');
        $patients = Patient::pluck('patient_no', 'id');
        $preliminaryMeasurements = PreliminaryMeasurement::pluck(
            'preasure',
            'id'
        );
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.appointments.create',
            compact(
                'allStaff',
                'patients',
                'preliminaryMeasurements',
                'hospitals'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
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

        return redirect()
            ->route('appointments.edit', $appointment)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Appointment $appointment): View
    {
        $this->authorize('view', $appointment);

        return view('app.appointments.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Appointment $appointment): View
    {
        $this->authorize('update', $appointment);

        $allStaff = Staff::pluck('staff_no', 'id');
        $patients = Patient::pluck('patient_no', 'id');
        $preliminaryMeasurements = PreliminaryMeasurement::pluck(
            'preasure',
            'id'
        );
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.appointments.edit',
            compact(
                'appointment',
                'allStaff',
                'patients',
                'preliminaryMeasurements',
                'hospitals'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Appointment $appointment
    ): RedirectResponse {
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

        return redirect()
            ->route('appointments.edit', $appointment)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Appointment $appointment
    ): RedirectResponse {
        $this->authorize('delete', $appointment);

        $appointment->delete();

        return redirect()
            ->route('appointments.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
