<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UnitType;
use Illuminate\Auth\Access\HandlesAuthorization;

class UnitTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the unitType can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list unittypes');
    }

    /**
     * Determine whether the unitType can view the model.
     */
    public function view(User $user, UnitType $model): bool
    {
        return $user->hasPermissionTo('view unittypes');
    }

    /**
     * Determine whether the unitType can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create unittypes');
    }

    /**
     * Determine whether the unitType can update the model.
     */
    public function update(User $user, UnitType $model): bool
    {
        return $user->hasPermissionTo('update unittypes');
    }

    /**
     * Determine whether the unitType can delete the model.
     */
    public function delete(User $user, UnitType $model): bool
    {
        return $user->hasPermissionTo('delete unittypes');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete unittypes');
    }

    /**
     * Determine whether the unitType can restore the model.
     */
    public function restore(User $user, UnitType $model): bool
    {
        return false;
    }

    /**
     * Determine whether the unitType can permanently delete the model.
     */
    public function forceDelete(User $user, UnitType $model): bool
    {
        return false;
    }
}
