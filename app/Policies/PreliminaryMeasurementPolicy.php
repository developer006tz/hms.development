<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PreliminaryMeasurement;
use Illuminate\Auth\Access\HandlesAuthorization;

class PreliminaryMeasurementPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the preliminaryMeasurement can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list preliminarymeasurements');
    }

    /**
     * Determine whether the preliminaryMeasurement can view the model.
     */
    public function view(User $user, PreliminaryMeasurement $model): bool
    {
        return $user->hasPermissionTo('view preliminarymeasurements');
    }

    /**
     * Determine whether the preliminaryMeasurement can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create preliminarymeasurements');
    }

    /**
     * Determine whether the preliminaryMeasurement can update the model.
     */
    public function update(User $user, PreliminaryMeasurement $model): bool
    {
        return $user->hasPermissionTo('update preliminarymeasurements');
    }

    /**
     * Determine whether the preliminaryMeasurement can delete the model.
     */
    public function delete(User $user, PreliminaryMeasurement $model): bool
    {
        return $user->hasPermissionTo('delete preliminarymeasurements');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete preliminarymeasurements');
    }

    /**
     * Determine whether the preliminaryMeasurement can restore the model.
     */
    public function restore(User $user, PreliminaryMeasurement $model): bool
    {
        return false;
    }

    /**
     * Determine whether the preliminaryMeasurement can permanently delete the model.
     */
    public function forceDelete(User $user, PreliminaryMeasurement $model): bool
    {
        return false;
    }
}
