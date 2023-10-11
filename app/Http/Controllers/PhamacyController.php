<?php

namespace App\Http\Controllers;

use App\Models\Phamacy;
use App\Models\Hospital;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PhamacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Phamacy::class);

        $search = $request->get('search', '');

        $phamacies = Phamacy::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.phamacies.index', compact('phamacies', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Phamacy::class);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view('app.phamacies.create', compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Phamacy::class);

        $validated = $request->validate([
            'phamacy_name' => ['required', 'max:255', 'string'],
            'phamacy_address' => ['required', 'max:255', 'string'],
            'phamacy_licence' => ['nullable', 'max:255', 'string'],
            'phamacy_phoneumber' => ['required', 'max:255', 'string'],
            'phamacy_email' => ['required', 'max:255', 'string'],
            'phamacy_branch' => ['nullable', 'max:255', 'string'],
            'phamacy_approval_document' => ['nullable', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $phamacy = Phamacy::create($validated);

        return redirect()
            ->route('phamacies.edit', $phamacy)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Phamacy $phamacy): View
    {
        $this->authorize('view', $phamacy);

        return view('app.phamacies.show', compact('phamacy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Phamacy $phamacy): View
    {
        $this->authorize('update', $phamacy);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view('app.phamacies.edit', compact('phamacy', 'hospitals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phamacy $phamacy): RedirectResponse
    {
        $this->authorize('update', $phamacy);

        $validated = $request->validate([
            'phamacy_name' => ['required', 'max:255', 'string'],
            'phamacy_address' => ['required', 'max:255', 'string'],
            'phamacy_licence' => ['nullable', 'max:255', 'string'],
            'phamacy_phoneumber' => ['required', 'max:255', 'string'],
            'phamacy_email' => ['required', 'max:255', 'string'],
            'phamacy_branch' => ['nullable', 'max:255', 'string'],
            'phamacy_approval_document' => ['nullable', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $phamacy->update($validated);

        return redirect()
            ->route('phamacies.edit', $phamacy)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Phamacy $phamacy
    ): RedirectResponse {
        $this->authorize('delete', $phamacy);

        $phamacy->delete();

        return redirect()
            ->route('phamacies.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
