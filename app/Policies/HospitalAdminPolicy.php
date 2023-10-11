<?php

namespace App\Policies;

use App\Models\User;
use App\Models\HospitalAdmin;
use Illuminate\Auth\Access\HandlesAuthorization;

class HospitalAdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the hospitalAdmin can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list hospitaladmins');
    }

    /**
     * Determine whether the hospitalAdmin can view the model.
     */
    public function view(User $user, HospitalAdmin $model): bool
    {
        return $user->hasPermissionTo('view hospitaladmins');
    }

    /**
     * Determine whether the hospitalAdmin can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create hospitaladmins');
    }

    /**
     * Determine whether the hospitalAdmin can update the model.
     */
    public function update(User $user, HospitalAdmin $model): bool
    {
        return $user->hasPermissionTo('update hospitaladmins');
    }

    /**
     * Determine whether the hospitalAdmin can delete the model.
     */
    public function delete(User $user, HospitalAdmin $model): bool
    {
        return $user->hasPermissionTo('delete hospitaladmins');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete hospitaladmins');
    }

    /**
     * Determine whether the hospitalAdmin can restore the model.
     */
    public function restore(User $user, HospitalAdmin $model): bool
    {
        return false;
    }

    /**
     * Determine whether the hospitalAdmin can permanently delete the model.
     */
    public function forceDelete(User $user, HospitalAdmin $model): bool
    {
        return false;
    }
}
