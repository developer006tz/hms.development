<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Hospital;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Lab::class);

        $search = $request->get('search', '');

        $labs = Lab::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.labs.index', compact('labs', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Lab::class);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view('app.labs.create', compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Lab::class);

        $validated = $request->validate([
            'lab_name' => ['required', 'max:255', 'string'],
            'lab_desciription' => ['required', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $lab = Lab::create($validated);

        return redirect()
            ->route('labs.edit', $lab)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Lab $lab): View
    {
        $this->authorize('view', $lab);

        return view('app.labs.show', compact('lab'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Lab $lab): View
    {
        $this->authorize('update', $lab);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view('app.labs.edit', compact('lab', 'hospitals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lab $lab): RedirectResponse
    {
        $this->authorize('update', $lab);

        $validated = $request->validate([
            'lab_name' => ['required', 'max:255', 'string'],
            'lab_desciription' => ['required', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $lab->update($validated);

        return redirect()
            ->route('labs.edit', $lab)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Lab $lab): RedirectResponse
    {
        $this->authorize('delete', $lab);

        $lab->delete();

        return redirect()
            ->route('labs.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
