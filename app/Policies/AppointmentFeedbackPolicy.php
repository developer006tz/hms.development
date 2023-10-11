<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AppointmentFeedback;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentFeedbackPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the appointmentFeedback can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list appointmentfeedbacks');
    }

    /**
     * Determine whether the appointmentFeedback can view the model.
     */
    public function view(User $user, AppointmentFeedback $model): bool
    {
        return $user->hasPermissionTo('view appointmentfeedbacks');
    }

    /**
     * Determine whether the appointmentFeedback can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create appointmentfeedbacks');
    }

    /**
     * Determine whether the appointmentFeedback can update the model.
     */
    public function update(User $user, AppointmentFeedback $model): bool
    {
        return $user->hasPermissionTo('update appointmentfeedbacks');
    }

    /**
     * Determine whether the appointmentFeedback can delete the model.
     */
    public function delete(User $user, AppointmentFeedback $model): bool
    {
        return $user->hasPermissionTo('delete appointmentfeedbacks');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete appointmentfeedbacks');
    }

    /**
     * Determine whether the appointmentFeedback can restore the model.
     */
    public function restore(User $user, AppointmentFeedback $model): bool
    {
        return false;
    }

    /**
     * Determine whether the appointmentFeedback can permanently delete the model.
     */
    public function forceDelete(User $user, AppointmentFeedback $model): bool
    {
        return false;
    }
}
