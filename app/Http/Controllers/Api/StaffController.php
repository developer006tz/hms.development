<?php

namespace App\Http\Controllers\Api;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\StaffResource;
use App\Http\Resources\StaffCollection;

class StaffController extends Controller
{
    public function index(Request $request): StaffCollection
    {
        $this->authorize('view-any', Staff::class);

        $search = $request->get('search', '');

        $allStaff = Staff::search($search)
            ->latest()
            ->paginate();

        return new StaffCollection($allStaff);
    }

    public function store(Request $request): StaffResource
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

        return new StaffResource($staff);
    }

    public function show(Request $request, Staff $staff): StaffResource
    {
        $this->authorize('view', $staff);

        return new StaffResource($staff);
    }

    public function update(Request $request, Staff $staff): StaffResource
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

        return new StaffResource($staff);
    }

    public function destroy(Request $request, Staff $staff): Response
    {
        $this->authorize('delete', $staff);

        $staff->delete();

        return response()->noContent();
    }
}
