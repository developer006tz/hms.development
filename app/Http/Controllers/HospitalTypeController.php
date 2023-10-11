<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\HospitalType;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HospitalTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', HospitalType::class);

        $search = $request->get('search', '');

        $hospitalTypes = HospitalType::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.hospital_types.index',
            compact('hospitalTypes', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', HospitalType::class);

        return view('app.hospital_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', HospitalType::class);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'description' => ['nullable', 'max:255', 'string'],
        ]);

        $hospitalType = HospitalType::create($validated);

        return redirect()
            ->route('hospital-types.edit', $hospitalType)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, HospitalType $hospitalType): View
    {
        $this->authorize('view', $hospitalType);

        return view('app.hospital_types.show', compact('hospitalType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, HospitalType $hospitalType): View
    {
        $this->authorize('update', $hospitalType);

        return view('app.hospital_types.edit', compact('hospitalType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        HospitalType $hospitalType
    ): RedirectResponse {
        $this->authorize('update', $hospitalType);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'description' => ['nullable', 'max:255', 'string'],
        ]);

        $hospitalType->update($validated);

        return redirect()
            ->route('hospital-types.edit', $hospitalType)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        HospitalType $hospitalType
    ): RedirectResponse {
        $this->authorize('delete', $hospitalType);

        $hospitalType->delete();

        return redirect()
            ->route('hospital-types.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
