<?php

namespace App\Http\Controllers\Api;

use App\Models\SuperAdmin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\SuperAdminResource;
use App\Http\Resources\SuperAdminCollection;

class SuperAdminController extends Controller
{
    public function index(Request $request): SuperAdminCollection
    {
        $this->authorize('view-any', SuperAdmin::class);

        $search = $request->get('search', '');

        $superAdmins = SuperAdmin::search($search)
            ->latest()
            ->paginate();

        return new SuperAdminCollection($superAdmins);
    }

    public function store(Request $request): SuperAdminResource
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

        return new SuperAdminResource($superAdmin);
    }

    public function show(
        Request $request,
        SuperAdmin $superAdmin
    ): SuperAdminResource {
        $this->authorize('view', $superAdmin);

        return new SuperAdminResource($superAdmin);
    }

    public function update(
        Request $request,
        SuperAdmin $superAdmin
    ): SuperAdminResource {
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

        return new SuperAdminResource($superAdmin);
    }

    public function destroy(Request $request, SuperAdmin $superAdmin): Response
    {
        $this->authorize('delete', $superAdmin);

        $superAdmin->delete();

        return response()->noContent();
    }
}
