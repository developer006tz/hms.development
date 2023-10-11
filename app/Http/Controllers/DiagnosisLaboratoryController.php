<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\View\View;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\DiagnosisLaboratory;
use Illuminate\Http\RedirectResponse;

class DiagnosisLaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', DiagnosisLaboratory::class);

        $search = $request->get('search', '');

        $diagnosisLaboratories = DiagnosisLaboratory::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.diagnosis_laboratories.index',
            compact('diagnosisLaboratories', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', DiagnosisLaboratory::class);

        $departments = Department::pluck('department_name', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.diagnosis_laboratories.create',
            compact('departments', 'hospitals')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', DiagnosisLaboratory::class);

        $validated = $request->validate([
            'lab_no' => ['required', 'max:255', 'string'],
            'diagnosis_laboratory_name' => ['nullable', 'max:255', 'string'],
            'diagnosis_laboratory_location' => [
                'nullable',
                'max:255',
                'string',
            ],
            'department_id' => ['required', 'exists:departments,id'],
            'lab_type' => ['required', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $diagnosisLaboratory = DiagnosisLaboratory::create($validated);

        return redirect()
            ->route('diagnosis-laboratories.edit', $diagnosisLaboratory)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Request $request,
        DiagnosisLaboratory $diagnosisLaboratory
    ): View {
        $this->authorize('view', $diagnosisLaboratory);

        return view(
            'app.diagnosis_laboratories.show',
            compact('diagnosisLaboratory')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(
        Request $request,
        DiagnosisLaboratory $diagnosisLaboratory
    ): View {
        $this->authorize('update', $diagnosisLaboratory);

        $departments = Department::pluck('department_name', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.diagnosis_laboratories.edit',
            compact('diagnosisLaboratory', 'departments', 'hospitals')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        DiagnosisLaboratory $diagnosisLaboratory
    ): RedirectResponse {
        $this->authorize('update', $diagnosisLaboratory);

        $validated = $request->validate([
            'lab_no' => ['required', 'max:255', 'string'],
            'diagnosis_laboratory_name' => ['nullable', 'max:255', 'string'],
            'diagnosis_laboratory_location' => [
                'nullable',
                'max:255',
                'string',
            ],
            'department_id' => ['required', 'exists:departments,id'],
            'lab_type' => ['required', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $diagnosisLaboratory->update($validated);

        return redirect()
            ->route('diagnosis-laboratories.edit', $diagnosisLaboratory)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        DiagnosisLaboratory $diagnosisLaboratory
    ): RedirectResponse {
        $this->authorize('delete', $diagnosisLaboratory);

        $diagnosisLaboratory->delete();

        return redirect()
            ->route('diagnosis-laboratories.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
