<?php

namespace App\Policies;

use App\Models\Lab;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LabPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the lab can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list labs');
    }

    /**
     * Determine whether the lab can view the model.
     */
    public function view(User $user, Lab $model): bool
    {
        return $user->hasPermissionTo('view labs');
    }

    /**
     * Determine whether the lab can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create labs');
    }

    /**
     * Determine whether the lab can update the model.
     */
    public function update(User $user, Lab $model): bool
    {
        return $user->hasPermissionTo('update labs');
    }

    /**
     * Determine whether the lab can delete the model.
     */
    public function delete(User $user, Lab $model): bool
    {
        return $user->hasPermissionTo('delete labs');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete labs');
    }

    /**
     * Determine whether the lab can restore the model.
     */
    public function restore(User $user, Lab $model): bool
    {
        return false;
    }

    /**
     * Determine whether the lab can permanently delete the model.
     */
    public function forceDelete(User $user, Lab $model): bool
    {
        return false;
    }
}
