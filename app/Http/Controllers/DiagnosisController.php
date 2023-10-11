<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Diagnosis;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Diagnosis::class);

        $search = $request->get('search', '');

        $diagnoses = Diagnosis::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.diagnoses.index', compact('diagnoses', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Diagnosis::class);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view('app.diagnoses.create', compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Diagnosis::class);

        $validated = $request->validate([
            'diagnosis_name' => ['required', 'max:255'],
            'diagnosis_price' => ['nullable', 'numeric'],
            'diagnosis_description' => ['nullable', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $diagnosis = Diagnosis::create($validated);

        return redirect()
            ->route('diagnoses.edit', $diagnosis)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Diagnosis $diagnosis): View
    {
        $this->authorize('view', $diagnosis);

        return view('app.diagnoses.show', compact('diagnosis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Diagnosis $diagnosis): View
    {
        $this->authorize('update', $diagnosis);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view('app.diagnoses.edit', compact('diagnosis', 'hospitals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Diagnosis $diagnosis
    ): RedirectResponse {
        $this->authorize('update', $diagnosis);

        $validated = $request->validate([
            'diagnosis_name' => ['required', 'max:255'],
            'diagnosis_price' => ['nullable', 'numeric'],
            'diagnosis_description' => ['nullable', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $diagnosis->update($validated);

        return redirect()
            ->route('diagnoses.edit', $diagnosis)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Diagnosis $diagnosis
    ): RedirectResponse {
        $this->authorize('delete', $diagnosis);

        $diagnosis->delete();

        return redirect()
            ->route('diagnoses.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
