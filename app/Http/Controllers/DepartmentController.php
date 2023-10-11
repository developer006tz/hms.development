<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\View\View;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Department::class);

        $search = $request->get('search', '');

        $departments = Department::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.departments.index', compact('departments', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Department::class);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view('app.departments.create', compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Department::class);

        $validated = $request->validate([
            'department_name' => ['required', 'max:255', 'string'],
            'department_description' => ['nullable', 'max:255', 'string'],
            'department_phonenumer' => ['nullable', 'max:255', 'string'],
            'department_location' => ['required', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $department = Department::create($validated);

        return redirect()
            ->route('departments.edit', $department)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Department $department): View
    {
        $this->authorize('view', $department);

        return view('app.departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Department $department): View
    {
        $this->authorize('update', $department);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view('app.departments.edit', compact('department', 'hospitals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Department $department
    ): RedirectResponse {
        $this->authorize('update', $department);

        $validated = $request->validate([
            'department_name' => ['required', 'max:255', 'string'],
            'department_description' => ['nullable', 'max:255', 'string'],
            'department_phonenumer' => ['nullable', 'max:255', 'string'],
            'department_location' => ['required', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $department->update($validated);

        return redirect()
            ->route('departments.edit', $department)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Department $department
    ): RedirectResponse {
        $this->authorize('delete', $department);

        $department->delete();

        return redirect()
            ->route('departments.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
