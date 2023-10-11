<?php

namespace App\Policies;

use App\Models\User;
use App\Models\StaffType;
use Illuminate\Auth\Access\HandlesAuthorization;

class StaffTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the staffType can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list stafftypes');
    }

    /**
     * Determine whether the staffType can view the model.
     */
    public function view(User $user, StaffType $model): bool
    {
        return $user->hasPermissionTo('view stafftypes');
    }

    /**
     * Determine whether the staffType can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create stafftypes');
    }

    /**
     * Determine whether the staffType can update the model.
     */
    public function update(User $user, StaffType $model): bool
    {
        return $user->hasPermissionTo('update stafftypes');
    }

    /**
     * Determine whether the staffType can delete the model.
     */
    public function delete(User $user, StaffType $model): bool
    {
        return $user->hasPermissionTo('delete stafftypes');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete stafftypes');
    }

    /**
     * Determine whether the staffType can restore the model.
     */
    public function restore(User $user, StaffType $model): bool
    {
        return false;
    }

    /**
     * Determine whether the staffType can permanently delete the model.
     */
    public function forceDelete(User $user, StaffType $model): bool
    {
        return false;
    }
}
