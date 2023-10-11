<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Assignment;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssignmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the assignment can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list assignments');
    }

    /**
     * Determine whether the assignment can view the model.
     */
    public function view(User $user, Assignment $model): bool
    {
        return $user->hasPermissionTo('view assignments');
    }

    /**
     * Determine whether the assignment can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create assignments');
    }

    /**
     * Determine whether the assignment can update the model.
     */
    public function update(User $user, Assignment $model): bool
    {
        return $user->hasPermissionTo('update assignments');
    }

    /**
     * Determine whether the assignment can delete the model.
     */
    public function delete(User $user, Assignment $model): bool
    {
        return $user->hasPermissionTo('delete assignments');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete assignments');
    }

    /**
     * Determine whether the assignment can restore the model.
     */
    public function restore(User $user, Assignment $model): bool
    {
        return false;
    }

    /**
     * Determine whether the assignment can permanently delete the model.
     */
    public function forceDelete(User $user, Assignment $model): bool
    {
        return false;
    }
}
