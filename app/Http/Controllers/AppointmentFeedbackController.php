<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\DoctorAppointment;
use App\Models\AppointmentFeedback;
use Illuminate\Http\RedirectResponse;

class AppointmentFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', AppointmentFeedback::class);

        $search = $request->get('search', '');

        $appointmentFeedbacks = AppointmentFeedback::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.appointment_feedbacks.index',
            compact('appointmentFeedbacks', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', AppointmentFeedback::class);

        $doctorAppointments = DoctorAppointment::pluck(
            'doctor_appoitment_description',
            'id'
        );
        $patients = Patient::pluck('patient_no', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');
        $allStaff = Staff::pluck('staff_no', 'id');

        return view(
            'app.appointment_feedbacks.create',
            compact('doctorAppointments', 'patients', 'hospitals', 'allStaff')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', AppointmentFeedback::class);

        $validated = $request->validate([
            'doctor_appointment_id' => [
                'required',
                'exists:doctor_appointments,id',
            ],
            'patient_id' => ['required', 'exists:patients,id'],
            'description' => ['required', 'max:255', 'string'],
            'status' => ['required', 'in:received,pending'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
            'doctor_id' => ['required', 'exists:staffs,id'],
        ]);

        $appointmentFeedback = AppointmentFeedback::create($validated);

        return redirect()
            ->route('appointment-feedbacks.edit', $appointmentFeedback)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Request $request,
        AppointmentFeedback $appointmentFeedback
    ): View {
        $this->authorize('view', $appointmentFeedback);

        return view(
            'app.appointment_feedbacks.show',
            compact('appointmentFeedback')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(
        Request $request,
        AppointmentFeedback $appointmentFeedback
    ): View {
        $this->authorize('update', $appointmentFeedback);

        $doctorAppointments = DoctorAppointment::pluck(
            'doctor_appoitment_description',
            'id'
        );
        $patients = Patient::pluck('patient_no', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');
        $allStaff = Staff::pluck('staff_no', 'id');

        return view(
            'app.appointment_feedbacks.edit',
            compact(
                'appointmentFeedback',
                'doctorAppointments',
                'patients',
                'hospitals',
                'allStaff'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        AppointmentFeedback $appointmentFeedback
    ): RedirectResponse {
        $this->authorize('update', $appointmentFeedback);

        $validated = $request->validate([
            'doctor_appointment_id' => [
                'required',
                'exists:doctor_appointments,id',
            ],
            'patient_id' => ['required', 'exists:patients,id'],
            'description' => ['required', 'max:255', 'string'],
            'status' => ['required', 'in:received,pending'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
            'doctor_id' => ['required', 'exists:staffs,id'],
        ]);

        $appointmentFeedback->update($validated);

        return redirect()
            ->route('appointment-feedbacks.edit', $appointmentFeedback)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        AppointmentFeedback $appointmentFeedback
    ): RedirectResponse {
        $this->authorize('delete', $appointmentFeedback);

        $appointmentFeedback->delete();

        return redirect()
            ->route('appointment-feedbacks.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
