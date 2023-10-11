<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Hospital;
use Illuminate\View\View;
use App\Models\StaffType;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Staff::class);

        $search = $request->get('search', '');

        $allStaff = Staff::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.all_staff.index', compact('allStaff', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Staff::class);

        $departments = Department::pluck('department_name', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');
        $staffTypes = StaffType::pluck('staff_type_name', 'id');
        $users = User::pluck('table_name', 'id');

        return view(
            'app.all_staff.create',
            compact('departments', 'hospitals', 'staffTypes', 'users')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Staff::class);

        $validated = $request->validate([
            'staff_no' => ['nullable', 'max:255', 'string'],
            'staff_firstname' => ['required', 'max:255', 'string'],
            'staff_middlename' => ['required', 'max:255', 'string'],
            'staff_lastname' => ['required', 'max:255', 'string'],
            'staff_address' => ['nullable', 'max:255', 'string'],
            'staff_photo' => ['nullable', 'max:255', 'string'],
            'staff_email' => ['required', 'max:255', 'string'],
            'staff_document' => ['required', 'max:255', 'string'],
            'staff_bio' => ['nullable', 'max:255', 'string'],
            'department_id' => ['required', 'exists:departments,id'],
            'staff_gender' => ['required', 'in:male,female,others'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
            'staff_type_id' => ['required', 'exists:staff_types,id'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $staff = Staff::create($validated);

        return redirect()
            ->route('all-staff.edit', $staff)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Staff $staff): View
    {
        $this->authorize('view', $staff);

        return view('app.all_staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Staff $staff): View
    {
        $this->authorize('update', $staff);

        $departments = Department::pluck('department_name', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');
        $staffTypes = StaffType::pluck('staff_type_name', 'id');
        $users = User::pluck('table_name', 'id');

        return view(
            'app.all_staff.edit',
            compact('staff', 'departments', 'hospitals', 'staffTypes', 'users')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff): RedirectResponse
    {
        $this->authorize('update', $staff);

        $validated = $request->validate([
            'staff_no' => ['nullable', 'max:255', 'string'],
            'staff_firstname' => ['required', 'max:255', 'string'],
            'staff_middlename' => ['required', 'max:255', 'string'],
            'staff_lastname' => ['required', 'max:255', 'string'],
            'staff_address' => ['nullable', 'max:255', 'string'],
            'staff_photo' => ['nullable', 'max:255', 'string'],
            'staff_email' => ['required', 'max:255', 'string'],
            'staff_document' => ['required', 'max:255', 'string'],
            'staff_bio' => ['nullable', 'max:255', 'string'],
            'department_id' => ['required', 'exists:departments,id'],
            'staff_gender' => ['required', 'in:male,female,others'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
            'staff_type_id' => ['required', 'exists:staff_types,id'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $staff->update($validated);

        return redirect()
            ->route('all-staff.edit', $staff)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Staff $staff): RedirectResponse
    {
        $this->authorize('delete', $staff);

        $staff->delete();

        return redirect()
            ->route('all-staff.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
