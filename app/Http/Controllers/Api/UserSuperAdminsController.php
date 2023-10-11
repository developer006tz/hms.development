<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\SuperAdminResource;
use App\Http\Resources\SuperAdminCollection;

class UserSuperAdminsController extends Controller
{
    public function index(Request $request, User $user): SuperAdminCollection
    {
        $this->authorize('view', $user);

        $search = $request->get('search', '');

        $superAdmins = $user
            ->superAdmins()
            ->search($search)
            ->latest()
            ->paginate();

        return new SuperAdminCollection($superAdmins);
    }

    public function store(Request $request, User $user): SuperAdminResource
    {
        $this->authorize('create', SuperAdmin::class);

        $validated = $request->validate([
            'firstname' => ['required', 'max:255', 'string'],
            'middlename' => ['required', 'max:255', 'string'],
            'lastname' => ['required', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'phonenumber' => ['required', 'max:255', 'string'],
            'password' => ['required'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $superAdmin = $user->superAdmins()->create($validated);

        return new SuperAdminResource($superAdmin);
    }
}
