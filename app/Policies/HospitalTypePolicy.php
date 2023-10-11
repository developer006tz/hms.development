<?php

namespace App\Policies;

use App\Models\User;
use App\Models\HospitalType;
use Illuminate\Auth\Access\HandlesAuthorization;

class HospitalTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the hospitalType can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list hospitaltypes');
    }

    /**
     * Determine whether the hospitalType can view the model.
     */
    public function view(User $user, HospitalType $model): bool
    {
        return $user->hasPermissionTo('view hospitaltypes');
    }

    /**
     * Determine whether the hospitalType can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create hospitaltypes');
    }

    /**
     * Determine whether the hospitalType can update the model.
     */
    public function update(User $user, HospitalType $model): bool
    {
        return $user->hasPermissionTo('update hospitaltypes');
    }

    /**
     * Determine whether the hospitalType can delete the model.
     */
    public function delete(User $user, HospitalType $model): bool
    {
        return $user->hasPermissionTo('delete hospitaltypes');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete hospitaltypes');
    }

    /**
     * Determine whether the hospitalType can restore the model.
     */
    public function restore(User $user, HospitalType $model): bool
    {
        return false;
    }

    /**
     * Determine whether the hospitalType can permanently delete the model.
     */
    public function forceDelete(User $user, HospitalType $model): bool
    {
        return false;
    }
}
