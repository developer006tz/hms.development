<?php

namespace App\Http\Controllers\Api;

use App\Models\Diagnosis;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\DiagnosisResource;
use App\Http\Resources\DiagnosisCollection;

class DiagnosisController extends Controller
{
    public function index(Request $request): DiagnosisCollection
    {
        $this->authorize('view-any', Diagnosis::class);

        $search = $request->get('search', '');

        $diagnoses = Diagnosis::search($search)
            ->latest()
            ->paginate();

        return new DiagnosisCollection($diagnoses);
    }

    public function store(Request $request): DiagnosisResource
    {
        $this->authorize('create', Diagnosis::class);

        $validated = $request->validate([
            'diagnosis_name' => ['required', 'max:255'],
            'diagnosis_price' => ['nullable', 'numeric'],
            'diagnosis_description' => ['nullable', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $diagnosis = Diagnosis::create($validated);

        return new DiagnosisResource($diagnosis);
    }

    public function show(
        Request $request,
        Diagnosis $diagnosis
    ): DiagnosisResource {
        $this->authorize('view', $diagnosis);

        return new DiagnosisResource($diagnosis);
    }

    public function update(
        Request $request,
        Diagnosis $diagnosis
    ): DiagnosisResource {
        $this->authorize('update', $diagnosis);

        $validated = $request->validate([
            'diagnosis_name' => ['required', 'max:255'],
            'diagnosis_price' => ['nullable', 'numeric'],
            'diagnosis_description' => ['nullable', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $diagnosis->update($validated);

        return new DiagnosisResource($diagnosis);
    }

    public function destroy(Request $request, Diagnosis $diagnosis): Response
    {
        $this->authorize('delete', $diagnosis);

        $diagnosis->delete();

        return response()->noContent();
    }
}
