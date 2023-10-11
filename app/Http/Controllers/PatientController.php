<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\View\View;
use App\Models\BloodGroup;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Patient::class);

        $search = $request->get('search', '');

        $patients = Patient::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.patients.index', compact('patients', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Patient::class);

        $bloodGroups = BloodGroup::pluck('blood_group_name', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');
        $users = User::pluck('table_name', 'id');

        return view(
            'app.patients.create',
            compact('bloodGroups', 'hospitals', 'users')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        dd($request->all());
        $this->authorize('create', Patient::class);

        $validated = $request->validate([
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
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $patient = Patient::create($validated);

        return redirect()
            ->route('patients.edit', $patient)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Patient $patient): View
    {
        $this->authorize('view', $patient);

        return view('app.patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Patient $patient): View
    {
        $this->authorize('update', $patient);

        $bloodGroups = BloodGroup::pluck('blood_group_name', 'id');
        $hospitals = Hospital::pluck('hospital_name', 'id');
        $users = User::pluck('table_name', 'id');

        return view(
            'app.patients.edit',
            compact('patient', 'bloodGroups', 'hospitals', 'users')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient): RedirectResponse
    {
        $this->authorize('update', $patient);

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
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $patient->update($validated);

        return redirect()
            ->route('patients.edit', $patient)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Patient $patient
    ): RedirectResponse {
        $this->authorize('delete', $patient);

        $patient->delete();

        return redirect()
            ->route('patients.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
