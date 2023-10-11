<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Models\SuperAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', SuperAdmin::class);

        $search = $request->get('search', '');

        $superAdmins = SuperAdmin::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.super_admins.index', compact('superAdmins', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', SuperAdmin::class);

        $users = User::pluck('table_name', 'id');

        return view('app.super_admins.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', SuperAdmin::class);

        $validated = $request->validate([
            'firstname' => ['required', 'max:255', 'string'],
            'middlename' => ['required', 'max:255', 'string'],
            'lastname' => ['required', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'phonenumber' => ['required', 'max:255', 'string'],
            'password' => ['required'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $superAdmin = SuperAdmin::create($validated);

        return redirect()
            ->route('super-admins.edit', $superAdmin)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, SuperAdmin $superAdmin): View
    {
        $this->authorize('view', $superAdmin);

        return view('app.super_admins.show', compact('superAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, SuperAdmin $superAdmin): View
    {
        $this->authorize('update', $superAdmin);

        $users = User::pluck('table_name', 'id');

        return view('app.super_admins.edit', compact('superAdmin', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        SuperAdmin $superAdmin
    ): RedirectResponse {
        $this->authorize('update', $superAdmin);

        $validated = $request->validate([
            'firstname' => ['required', 'max:255', 'string'],
            'middlename' => ['required', 'max:255', 'string'],
            'lastname' => ['required', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'phonenumber' => ['required', 'max:255', 'string'],
            'password' => ['nullable'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        if (empty($validated['password'])) {
            unset($validated['password']);
        } else {
            $validated['password'] = Hash::make($validated['password']);
        }

        $superAdmin->update($validated);

        return redirect()
            ->route('super-admins.edit', $superAdmin)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        SuperAdmin $superAdmin
    ): RedirectResponse {
        $this->authorize('delete', $superAdmin);

        $superAdmin->delete();

        return redirect()
            ->route('super-admins.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
