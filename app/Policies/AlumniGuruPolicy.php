<?php

namespace App\Policies;

use App\Models\Alumni_guru;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AlumniGuruPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Alumni_guru  $alumniGuru
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Alumni_guru $alumniGuru)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Alumni_guru  $alumniGuru
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Alumni_guru $alumniGuru)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Alumni_guru  $alumniGuru
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Alumni_guru $alumniGuru)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Alumni_guru  $alumniGuru
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Alumni_guru $alumniGuru)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Alumni_guru  $alumniGuru
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Alumni_guru $alumniGuru)
    {
        //
    }
}
