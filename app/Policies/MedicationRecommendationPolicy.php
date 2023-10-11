<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MedicationRecommendation;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicationRecommendationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the medicationRecommendation can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list medicationrecommendations');
    }

    /**
     * Determine whether the medicationRecommendation can view the model.
     */
    public function view(User $user, MedicationRecommendation $model): bool
    {
        return $user->hasPermissionTo('view medicationrecommendations');
    }

    /**
     * Determine whether the medicationRecommendation can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create medicationrecommendations');
    }

    /**
     * Determine whether the medicationRecommendation can update the model.
     */
    public function update(User $user, MedicationRecommendation $model): bool
    {
        return $user->hasPermissionTo('update medicationrecommendations');
    }

    /**
     * Determine whether the medicationRecommendation can delete the model.
     */
    public function delete(User $user, MedicationRecommendation $model): bool
    {
        return $user->hasPermissionTo('delete medicationrecommendations');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete medicationrecommendations');
    }

    /**
     * Determine whether the medicationRecommendation can restore the model.
     */
    public function restore(User $user, MedicationRecommendation $model): bool
    {
        return false;
    }

    /**
     * Determine whether the medicationRecommendation can permanently delete the model.
     */
    public function forceDelete(
        User $user,
        MedicationRecommendation $model
    ): bool {
        return false;
    }
}
