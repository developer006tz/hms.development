<?php

namespace App\Policies;

use App\Models\User;
use App\Models\InPatient;
use Illuminate\Auth\Access\HandlesAuthorization;

class InPatientPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the inPatient can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list inpatients');
    }

    /**
     * Determine whether the inPatient can view the model.
     */
    public function view(User $user, InPatient $model): bool
    {
        return $user->hasPermissionTo('view inpatients');
    }

    /**
     * Determine whether the inPatient can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create inpatients');
    }

    /**
     * Determine whether the inPatient can update the model.
     */
    public function update(User $user, InPatient $model): bool
    {
        return $user->hasPermissionTo('update inpatients');
    }

    /**
     * Determine whether the inPatient can delete the model.
     */
    public function delete(User $user, InPatient $model): bool
    {
        return $user->hasPermissionTo('delete inpatients');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete inpatients');
    }

    /**
     * Determine whether the inPatient can restore the model.
     */
    public function restore(User $user, InPatient $model): bool
    {
        return false;
    }

    /**
     * Determine whether the inPatient can permanently delete the model.
     */
    public function forceDelete(User $user, InPatient $model): bool
    {
        return false;
    }
}
