<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PhysiotherapyType;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhysiotherapyTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the physiotherapyType can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list physiotherapytypes');
    }

    /**
     * Determine whether the physiotherapyType can view the model.
     */
    public function view(User $user, PhysiotherapyType $model): bool
    {
        return $user->hasPermissionTo('view physiotherapytypes');
    }

    /**
     * Determine whether the physiotherapyType can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create physiotherapytypes');
    }

    /**
     * Determine whether the physiotherapyType can update the model.
     */
    public function update(User $user, PhysiotherapyType $model): bool
    {
        return $user->hasPermissionTo('update physiotherapytypes');
    }

    /**
     * Determine whether the physiotherapyType can delete the model.
     */
    public function delete(User $user, PhysiotherapyType $model): bool
    {
        return $user->hasPermissionTo('delete physiotherapytypes');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete physiotherapytypes');
    }

    /**
     * Determine whether the physiotherapyType can restore the model.
     */
    public function restore(User $user, PhysiotherapyType $model): bool
    {
        return false;
    }

    /**
     * Determine whether the physiotherapyType can permanently delete the model.
     */
    public function forceDelete(User $user, PhysiotherapyType $model): bool
    {
        return false;
    }
}
