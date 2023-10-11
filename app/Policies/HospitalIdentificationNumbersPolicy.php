<?php

namespace App\Policies;

use App\Models\User;
use App\Models\HospitalIdentificationNumbers;
use Illuminate\Auth\Access\HandlesAuthorization;

class HospitalIdentificationNumbersPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the hospitalIdentificationNumbers can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list allhospitalidentificationnumbers');
    }

    /**
     * Determine whether the hospitalIdentificationNumbers can view the model.
     */
    public function view(User $user, HospitalIdentificationNumbers $model): bool
    {
        return $user->hasPermissionTo('view allhospitalidentificationnumbers');
    }

    /**
     * Determine whether the hospitalIdentificationNumbers can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo(
            'create allhospitalidentificationnumbers'
        );
    }

    /**
     * Determine whether the hospitalIdentificationNumbers can update the model.
     */
    public function update(
        User $user,
        HospitalIdentificationNumbers $model
    ): bool {
        return $user->hasPermissionTo(
            'update allhospitalidentificationnumbers'
        );
    }

    /**
     * Determine whether the hospitalIdentificationNumbers can delete the model.
     */
    public function delete(
        User $user,
        HospitalIdentificationNumbers $model
    ): bool {
        return $user->hasPermissionTo(
            'delete allhospitalidentificationnumbers'
        );
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo(
            'delete allhospitalidentificationnumbers'
        );
    }

    /**
     * Determine whether the hospitalIdentificationNumbers can restore the model.
     */
    public function restore(
        User $user,
        HospitalIdentificationNumbers $model
    ): bool {
        return false;
    }

    /**
     * Determine whether the hospitalIdentificationNumbers can permanently delete the model.
     */
    public function forceDelete(
        User $user,
        HospitalIdentificationNumbers $model
    ): bool {
        return false;
    }
}
