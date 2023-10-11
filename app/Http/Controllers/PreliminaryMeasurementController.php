<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\PreliminaryMeasurement;

class PreliminaryMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', PreliminaryMeasurement::class);

        $search = $request->get('search', '');

        $preliminaryMeasurements = PreliminaryMeasurement::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.preliminary_measurements.index',
            compact('preliminaryMeasurements', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', PreliminaryMeasurement::class);

        $patients = Patient::pluck('patient_no', 'id');
        $allStaff = Staff::pluck('staff_no', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.preliminary_measurements.create',
            compact('patients', 'allStaff', 'hospitals')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', PreliminaryMeasurement::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'staff_id' => ['required', 'exists:staffs,id'],
            'preasure' => ['nullable', 'max:255', 'string'],
            'weight' => ['nullable', 'max:255', 'string'],
            'height' => ['nullable', 'numeric'],
            'custom_diagnosis' => ['nullable', 'max:255', 'json'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);
        $validated['custom_diagnosis'] = json_decode(
            $validated['custom_diagnosis'],
            true
        );

        $preliminaryMeasurement = PreliminaryMeasurement::create($validated);

        return redirect()
            ->route('preliminary-measurements.edit', $preliminaryMeasurement)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Request $request,
        PreliminaryMeasurement $preliminaryMeasurement
    ): View {
        $this->authorize('view', $preliminaryMeasurement);

        return view(
            'app.preliminary_measurements.show',
            compact('preliminaryMeasurement')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(
        Request $request,
        PreliminaryMeasurement $preliminaryMeasurement
    ): View {
        $this->authorize('update', $preliminaryMeasurement);

        $patients = Patient::pluck('patient_no', 'id');
        $allStaff = Staff::pluck('staff_no', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.preliminary_measurements.edit',
            compact(
                'preliminaryMeasurement',
                'patients',
                'allStaff',
                'hospitals'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        PreliminaryMeasurement $preliminaryMeasurement
    ): RedirectResponse {
        $this->authorize('update', $preliminaryMeasurement);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'staff_id' => ['required', 'exists:staffs,id'],
            'preasure' => ['nullable', 'max:255', 'string'],
            'weight' => ['nullable', 'max:255', 'string'],
            'height' => ['nullable', 'numeric'],
            'custom_diagnosis' => ['nullable', 'max:255', 'json'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);
        $validated['custom_diagnosis'] = json_decode(
            $validated['custom_diagnosis'],
            true
        );

        $preliminaryMeasurement->update($validated);

        return redirect()
            ->route('preliminary-measurements.edit', $preliminaryMeasurement)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        PreliminaryMeasurement $preliminaryMeasurement
    ): RedirectResponse {
        $this->authorize('delete', $preliminaryMeasurement);

        $preliminaryMeasurement->delete();

        return redirect()
            ->route('preliminary-measurements.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
