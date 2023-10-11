<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\View\View;
use App\Models\BloodGroup;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BloodGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', BloodGroup::class);

        $search = $request->get('search', '');

        $bloodGroups = BloodGroup::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.blood_groups.index', compact('bloodGroups', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', BloodGroup::class);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view('app.blood_groups.create', compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', BloodGroup::class);

        $validated = $request->validate([
            'blood_group_name' => ['required', 'max:255', 'string'],
            'blood_group_description' => ['required', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $bloodGroup = BloodGroup::create($validated);

        return redirect()
            ->route('blood-groups.edit', $bloodGroup)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, BloodGroup $bloodGroup): View
    {
        $this->authorize('view', $bloodGroup);

        return view('app.blood_groups.show', compact('bloodGroup'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, BloodGroup $bloodGroup): View
    {
        $this->authorize('update', $bloodGroup);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.blood_groups.edit',
            compact('bloodGroup', 'hospitals')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        BloodGroup $bloodGroup
    ): RedirectResponse {
        $this->authorize('update', $bloodGroup);

        $validated = $request->validate([
            'blood_group_name' => ['required', 'max:255', 'string'],
            'blood_group_description' => ['required', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $bloodGroup->update($validated);

        return redirect()
            ->route('blood-groups.edit', $bloodGroup)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        BloodGroup $bloodGroup
    ): RedirectResponse {
        $this->authorize('delete', $bloodGroup);

        $bloodGroup->delete();

        return redirect()
            ->route('blood-groups.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
