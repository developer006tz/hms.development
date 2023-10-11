<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WardType;
use Illuminate\Auth\Access\HandlesAuthorization;

class WardTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the wardType can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list wardtypes');
    }

    /**
     * Determine whether the wardType can view the model.
     */
    public function view(User $user, WardType $model): bool
    {
        return $user->hasPermissionTo('view wardtypes');
    }

    /**
     * Determine whether the wardType can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create wardtypes');
    }

    /**
     * Determine whether the wardType can update the model.
     */
    public function update(User $user, WardType $model): bool
    {
        return $user->hasPermissionTo('update wardtypes');
    }

    /**
     * Determine whether the wardType can delete the model.
     */
    public function delete(User $user, WardType $model): bool
    {
        return $user->hasPermissionTo('delete wardtypes');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete wardtypes');
    }

    /**
     * Determine whether the wardType can restore the model.
     */
    public function restore(User $user, WardType $model): bool
    {
        return false;
    }

    /**
     * Determine whether the wardType can permanently delete the model.
     */
    public function forceDelete(User $user, WardType $model): bool
    {
        return false;
    }
}
