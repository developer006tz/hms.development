<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PhysiotherapyApplication;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhysiotherapyApplicationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the physiotherapyApplication can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list physiotherapyapplications');
    }

    /**
     * Determine whether the physiotherapyApplication can view the model.
     */
    public function view(User $user, PhysiotherapyApplication $model): bool
    {
        return $user->hasPermissionTo('view physiotherapyapplications');
    }

    /**
     * Determine whether the physiotherapyApplication can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create physiotherapyapplications');
    }

    /**
     * Determine whether the physiotherapyApplication can update the model.
     */
    public function update(User $user, PhysiotherapyApplication $model): bool
    {
        return $user->hasPermissionTo('update physiotherapyapplications');
    }

    /**
     * Determine whether the physiotherapyApplication can delete the model.
     */
    public function delete(User $user, PhysiotherapyApplication $model): bool
    {
        return $user->hasPermissionTo('delete physiotherapyapplications');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete physiotherapyapplications');
    }

    /**
     * Determine whether the physiotherapyApplication can restore the model.
     */
    public function restore(User $user, PhysiotherapyApplication $model): bool
    {
        return false;
    }

    /**
     * Determine whether the physiotherapyApplication can permanently delete the model.
     */
    public function forceDelete(
        User $user,
        PhysiotherapyApplication $model
    ): bool {
        return false;
    }
}
