<?php

namespace App\Http\Controllers\Api;

use App\Models\StaffType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\StaffResource;
use App\Http\Resources\StaffCollection;

class StaffTypeAllStaffController extends Controller
{
    public function index(
        Request $request,
        StaffType $staffType
    ): StaffCollection {
        $this->authorize('view', $staffType);

        $search = $request->get('search', '');

        $allStaff = $staffType
            ->allStaff()
            ->search($search)
            ->latest()
            ->paginate();

        return new StaffCollection($allStaff);
    }

    public function store(Request $request, StaffType $staffType): StaffResource
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
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $staff = $staffType->allStaff()->create($validated);

        return new StaffResource($staff);
    }
}
