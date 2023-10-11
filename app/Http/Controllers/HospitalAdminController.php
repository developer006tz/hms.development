<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hospital;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\HospitalAdmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class HospitalAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', HospitalAdmin::class);

        $search = $request->get('search', '');

        $hospitalAdmins = HospitalAdmin::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.hospital_admins.index',
            compact('hospitalAdmins', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', HospitalAdmin::class);

        $hospitals = Hospital::pluck('hospital_name', 'id');
        $users = User::pluck('table_name', 'id');

        return view(
            'app.hospital_admins.create',
            compact('hospitals', 'users')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', HospitalAdmin::class);

        $validated = $request->validate([
            'firstname' => ['nullable', 'max:255', 'string'],
            'middlename' => ['nullable', 'max:255', 'string'],
            'lastname' => ['nullable', 'max:255', 'string'],
            'username' => ['required', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'phonenumber' => ['required', 'max:255', 'string'],
            'password' => ['required'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $hospitalAdmin = HospitalAdmin::create($validated);

        return redirect()
            ->route('hospital-admins.edit', $hospitalAdmin)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, HospitalAdmin $hospitalAdmin): View
    {
        $this->authorize('view', $hospitalAdmin);

        return view('app.hospital_admins.show', compact('hospitalAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, HospitalAdmin $hospitalAdmin): View
    {
        $this->authorize('update', $hospitalAdmin);

        $hospitals = Hospital::pluck('hospital_name', 'id');
        $users = User::pluck('table_name', 'id');

        return view(
            'app.hospital_admins.edit',
            compact('hospitalAdmin', 'hospitals', 'users')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        HospitalAdmin $hospitalAdmin
    ): RedirectResponse {
        $this->authorize('update', $hospitalAdmin);

        $validated = $request->validate([
            'firstname' => ['nullable', 'max:255', 'string'],
            'middlename' => ['nullable', 'max:255', 'string'],
            'lastname' => ['nullable', 'max:255', 'string'],
            'username' => ['required', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'phonenumber' => ['required', 'max:255', 'string'],
            'password' => ['nullable'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        if (empty($validated['password'])) {
            unset($validated['password']);
        } else {
            $validated['password'] = Hash::make($validated['password']);
        }

        $hospitalAdmin->update($validated);

        return redirect()
            ->route('hospital-admins.edit', $hospitalAdmin)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        HospitalAdmin $hospitalAdmin
    ): RedirectResponse {
        $this->authorize('delete', $hospitalAdmin);

        $hospitalAdmin->delete();

        return redirect()
            ->route('hospital-admins.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
