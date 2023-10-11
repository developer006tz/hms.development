<?php

namespace App\Policies;

use App\Models\User;
use App\Models\SuperAdmin;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuperAdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the superAdmin can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list superadmins');
    }

    /**
     * Determine whether the superAdmin can view the model.
     */
    public function view(User $user, SuperAdmin $model): bool
    {
        return $user->hasPermissionTo('view superadmins');
    }

    /**
     * Determine whether the superAdmin can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create superadmins');
    }

    /**
     * Determine whether the superAdmin can update the model.
     */
    public function update(User $user, SuperAdmin $model): bool
    {
        return $user->hasPermissionTo('update superadmins');
    }

    /**
     * Determine whether the superAdmin can delete the model.
     */
    public function delete(User $user, SuperAdmin $model): bool
    {
        return $user->hasPermissionTo('delete superadmins');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete superadmins');
    }

    /**
     * Determine whether the superAdmin can restore the model.
     */
    public function restore(User $user, SuperAdmin $model): bool
    {
        return false;
    }

    /**
     * Determine whether the superAdmin can permanently delete the model.
     */
    public function forceDelete(User $user, SuperAdmin $model): bool
    {
        return false;
    }
}
