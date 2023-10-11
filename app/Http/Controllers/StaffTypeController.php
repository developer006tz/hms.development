<?php

namespace App\Http\Controllers;

use App\Models\StaffType;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class StaffTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', StaffType::class);

        $search = $request->get('search', '');

        $staffTypes = StaffType::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.staff_types.index', compact('staffTypes', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', StaffType::class);

        return view('app.staff_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', StaffType::class);

        $validated = $request->validate([
            'staff_type_name' => ['required', 'max:255', 'string'],
            'staff_type_description' => ['nullable', 'max:255', 'string'],
        ]);

        $staffType = StaffType::create($validated);

        return redirect()
            ->route('staff-types.edit', $staffType)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, StaffType $staffType): View
    {
        $this->authorize('view', $staffType);

        return view('app.staff_types.show', compact('staffType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, StaffType $staffType): View
    {
        $this->authorize('update', $staffType);

        return view('app.staff_types.edit', compact('staffType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        StaffType $staffType
    ): RedirectResponse {
        $this->authorize('update', $staffType);

        $validated = $request->validate([
            'staff_type_name' => ['required', 'max:255', 'string'],
            'staff_type_description' => ['nullable', 'max:255', 'string'],
        ]);

        $staffType->update($validated);

        return redirect()
            ->route('staff-types.edit', $staffType)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        StaffType $staffType
    ): RedirectResponse {
        $this->authorize('delete', $staffType);

        $staffType->delete();

        return redirect()
            ->route('staff-types.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
