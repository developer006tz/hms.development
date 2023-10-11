<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\DoctorAppointment;
use Illuminate\Http\RedirectResponse;
use App\Models\AppointmentDoctorInvoice;

class AppointmentDoctorInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', AppointmentDoctorInvoice::class);

        $search = $request->get('search', '');

        $appointmentDoctorInvoices = AppointmentDoctorInvoice::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.appointment_doctor_invoices.index',
            compact('appointmentDoctorInvoices', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', AppointmentDoctorInvoice::class);

        $patients = Patient::pluck('patient_no', 'id');
        $doctorAppointments = DoctorAppointment::pluck(
            'doctor_appoitment_description',
            'id'
        );
        $hospitals = Hospital::pluck('hospital_name', 'id');
        $allStaff = Staff::pluck('staff_no', 'id');

        return view(
            'app.appointment_doctor_invoices.create',
            compact('patients', 'doctorAppointments', 'hospitals', 'allStaff')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', AppointmentDoctorInvoice::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'balance' => ['required', 'numeric'],
            'paid_amount' => ['required', 'numeric'],
            'description' => ['nullable', 'max:255', 'string'],
            'remark' => ['nullable', 'max:255', 'string'],
            'status' => ['nullable', 'in:partial paid,not paid,full paid'],
            'doctor_appointment_id' => [
                'required',
                'exists:doctor_appointments,id',
            ],
            'hospital_id' => ['required', 'exists:hospitals,id'],
            'staff_id' => ['required', 'exists:staffs,id'],
        ]);

        $appointmentDoctorInvoice = AppointmentDoctorInvoice::create(
            $validated
        );

        return redirect()
            ->route(
                'appointment-doctor-invoices.edit',
                $appointmentDoctorInvoice
            )
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Request $request,
        AppointmentDoctorInvoice $appointmentDoctorInvoice
    ): View {
        $this->authorize('view', $appointmentDoctorInvoice);

        return view(
            'app.appointment_doctor_invoices.show',
            compact('appointmentDoctorInvoice')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(
        Request $request,
        AppointmentDoctorInvoice $appointmentDoctorInvoice
    ): View {
        $this->authorize('update', $appointmentDoctorInvoice);

        $patients = Patient::pluck('patient_no', 'id');
        $doctorAppointments = DoctorAppointment::pluck(
            'doctor_appoitment_description',
            'id'
        );
        $hospitals = Hospital::pluck('hospital_name', 'id');
        $allStaff = Staff::pluck('staff_no', 'id');

        return view(
            'app.appointment_doctor_invoices.edit',
            compact(
                'appointmentDoctorInvoice',
                'patients',
                'doctorAppointments',
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
        AppointmentDoctorInvoice $appointmentDoctorInvoice
    ): RedirectResponse {
        $this->authorize('update', $appointmentDoctorInvoice);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'balance' => ['required', 'numeric'],
            'paid_amount' => ['required', 'numeric'],
            'description' => ['nullable', 'max:255', 'string'],
            'remark' => ['nullable', 'max:255', 'string'],
            'status' => ['nullable', 'in:partial paid,not paid,full paid'],
            'doctor_appointment_id' => [
                'required',
                'exists:doctor_appointments,id',
            ],
            'hospital_id' => ['required', 'exists:hospitals,id'],
            'staff_id' => ['required', 'exists:staffs,id'],
        ]);

        $appointmentDoctorInvoice->update($validated);

        return redirect()
            ->route(
                'appointment-doctor-invoices.edit',
                $appointmentDoctorInvoice
            )
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        AppointmentDoctorInvoice $appointmentDoctorInvoice
    ): RedirectResponse {
        $this->authorize('delete', $appointmentDoctorInvoice);

        $appointmentDoctorInvoice->delete();

        return redirect()
            ->route('appointment-doctor-invoices.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
