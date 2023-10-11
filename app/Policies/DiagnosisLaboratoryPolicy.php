<?php

namespace App\Policies;

use App\Models\User;
use App\Models\DiagnosisLaboratory;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiagnosisLaboratoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the diagnosisLaboratory can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list diagnosislaboratories');
    }

    /**
     * Determine whether the diagnosisLaboratory can view the model.
     */
    public function view(User $user, DiagnosisLaboratory $model): bool
    {
        return $user->hasPermissionTo('view diagnosislaboratories');
    }

    /**
     * Determine whether the diagnosisLaboratory can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create diagnosislaboratories');
    }

    /**
     * Determine whether the diagnosisLaboratory can update the model.
     */
    public function update(User $user, DiagnosisLaboratory $model): bool
    {
        return $user->hasPermissionTo('update diagnosislaboratories');
    }

    /**
     * Determine whether the diagnosisLaboratory can delete the model.
     */
    public function delete(User $user, DiagnosisLaboratory $model): bool
    {
        return $user->hasPermissionTo('delete diagnosislaboratories');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete diagnosislaboratories');
    }

    /**
     * Determine whether the diagnosisLaboratory can restore the model.
     */
    public function restore(User $user, DiagnosisLaboratory $model): bool
    {
        return false;
    }

    /**
     * Determine whether the diagnosisLaboratory can permanently delete the model.
     */
    public function forceDelete(User $user, DiagnosisLaboratory $model): bool
    {
        return false;
    }
}
