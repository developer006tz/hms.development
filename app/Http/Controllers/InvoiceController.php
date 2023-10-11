<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\View\View;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Invoice::class);

        $search = $request->get('search', '');

        $invoices = Invoice::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.invoices.index', compact('invoices', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Invoice::class);

        $patients = Patient::pluck('patient_no', 'id');
        $appointments = Appointment::pluck('insuarance_status', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.invoices.create',
            compact('patients', 'appointments', 'hospitals')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Invoice::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'invoice_balance' => ['nullable', 'numeric'],
            'paid_ammount' => ['required', 'numeric'],
            'remark' => ['nullable', 'max:255', 'string'],
            'appointment_id' => ['required', 'exists:appointments,id'],
            'invoice_status' => ['nullable', 'in:paid,unpaid,patial paid'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $invoice = Invoice::create($validated);

        return redirect()
            ->route('invoices.edit', $invoice)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Invoice $invoice): View
    {
        $this->authorize('view', $invoice);

        return view('app.invoices.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Invoice $invoice): View
    {
        $this->authorize('update', $invoice);

        $patients = Patient::pluck('patient_no', 'id');
        $appointments = Appointment::pluck('insuarance_status', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.invoices.edit',
            compact('invoice', 'patients', 'appointments', 'hospitals')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice): RedirectResponse
    {
        $this->authorize('update', $invoice);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'invoice_balance' => ['nullable', 'numeric'],
            'paid_ammount' => ['required', 'numeric'],
            'remark' => ['nullable', 'max:255', 'string'],
            'appointment_id' => ['required', 'exists:appointments,id'],
            'invoice_status' => ['nullable', 'in:paid,unpaid,patial paid'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $invoice->update($validated);

        return redirect()
            ->route('invoices.edit', $invoice)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Invoice $invoice
    ): RedirectResponse {
        $this->authorize('delete', $invoice);

        $invoice->delete();

        return redirect()
            ->route('invoices.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
