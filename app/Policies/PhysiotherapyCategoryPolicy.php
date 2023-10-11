<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PhysiotherapyCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhysiotherapyCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the physiotherapyCategory can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list physiotherapycategories');
    }

    /**
     * Determine whether the physiotherapyCategory can view the model.
     */
    public function view(User $user, PhysiotherapyCategory $model): bool
    {
        return $user->hasPermissionTo('view physiotherapycategories');
    }

    /**
     * Determine whether the physiotherapyCategory can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create physiotherapycategories');
    }

    /**
     * Determine whether the physiotherapyCategory can update the model.
     */
    public function update(User $user, PhysiotherapyCategory $model): bool
    {
        return $user->hasPermissionTo('update physiotherapycategories');
    }

    /**
     * Determine whether the physiotherapyCategory can delete the model.
     */
    public function delete(User $user, PhysiotherapyCategory $model): bool
    {
        return $user->hasPermissionTo('delete physiotherapycategories');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete physiotherapycategories');
    }

    /**
     * Determine whether the physiotherapyCategory can restore the model.
     */
    public function restore(User $user, PhysiotherapyCategory $model): bool
    {
        return false;
    }

    /**
     * Determine whether the physiotherapyCategory can permanently delete the model.
     */
    public function forceDelete(User $user, PhysiotherapyCategory $model): bool
    {
        return false;
    }
}
