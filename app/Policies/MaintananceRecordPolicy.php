<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MaintananceRecord;
use Illuminate\Auth\Access\HandlesAuthorization;

class MaintananceRecordPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the maintananceRecord can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list maintanancerecords');
    }

    /**
     * Determine whether the maintananceRecord can view the model.
     */
    public function view(User $user, MaintananceRecord $model): bool
    {
        return $user->hasPermissionTo('view maintanancerecords');
    }

    /**
     * Determine whether the maintananceRecord can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create maintanancerecords');
    }

    /**
     * Determine whether the maintananceRecord can update the model.
     */
    public function update(User $user, MaintananceRecord $model): bool
    {
        return $user->hasPermissionTo('update maintanancerecords');
    }

    /**
     * Determine whether the maintananceRecord can delete the model.
     */
    public function delete(User $user, MaintananceRecord $model): bool
    {
        return $user->hasPermissionTo('delete maintanancerecords');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete maintanancerecords');
    }

    /**
     * Determine whether the maintananceRecord can restore the model.
     */
    public function restore(User $user, MaintananceRecord $model): bool
    {
        return false;
    }

    /**
     * Determine whether the maintananceRecord can permanently delete the model.
     */
    public function forceDelete(User $user, MaintananceRecord $model): bool
    {
        return false;
    }
}
