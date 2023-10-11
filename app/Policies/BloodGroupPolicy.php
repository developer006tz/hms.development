<?php

namespace App\Policies;

use App\Models\User;
use App\Models\BloodGroup;
use Illuminate\Auth\Access\HandlesAuthorization;

class BloodGroupPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the bloodGroup can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list bloodgroups');
    }

    /**
     * Determine whether the bloodGroup can view the model.
     */
    public function view(User $user, BloodGroup $model): bool
    {
        return $user->hasPermissionTo('view bloodgroups');
    }

    /**
     * Determine whether the bloodGroup can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create bloodgroups');
    }

    /**
     * Determine whether the bloodGroup can update the model.
     */
    public function update(User $user, BloodGroup $model): bool
    {
        return $user->hasPermissionTo('update bloodgroups');
    }

    /**
     * Determine whether the bloodGroup can delete the model.
     */
    public function delete(User $user, BloodGroup $model): bool
    {
        return $user->hasPermissionTo('delete bloodgroups');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete bloodgroups');
    }

    /**
     * Determine whether the bloodGroup can restore the model.
     */
    public function restore(User $user, BloodGroup $model): bool
    {
        return false;
    }

    /**
     * Determine whether the bloodGroup can permanently delete the model.
     */
    public function forceDelete(User $user, BloodGroup $model): bool
    {
        return false;
    }
}
