<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientResource;
use App\Http\Resources\PatientCollection;

class UserPatientsController extends Controller
{
    public function index(Request $request, User $user): PatientCollection
    {
        $this->authorize('view', $user);

        $search = $request->get('search', '');

        $patients = $user
            ->patients()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientCollection($patients);
    }

    public function store(Request $request, User $user): PatientResource
    {
        $this->authorize('create', Patient::class);

        $validated = $request->validate([
            'patient_no' => ['required', 'max:255', 'string'],
            'patient_firstname' => ['required', 'max:255', 'string'],
            'patient_email' => ['nullable', 'max:255', 'string'],
            'patient_address' => ['required', 'max:255', 'string'],
            'patient_phonenumber' => ['required', 'max:255', 'string'],
            'patient_gender' => ['required', 'in:male,female,others'],
            'patient_dob' => ['nullable', 'date'],
            'patient_city' => ['required', 'max:255', 'string'],
            'patient_zipcode' => ['nullable', 'max:255', 'string'],
            'patient_country' => ['required', 'max:255', 'string'],
            'patient_nationality' => ['required', 'max:255', 'string'],
            'patient_password' => ['required', 'max:255', 'string'],
            'patient_default_password' => ['required', 'max:255', 'string'],
            'patient_photo' => ['nullable', 'max:255', 'string'],
            'blood_group_id' => ['nullable', 'exists:blood_groups,id'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $patient = $user->patients()->create($validated);

        return new PatientResource($patient);
    }
}
