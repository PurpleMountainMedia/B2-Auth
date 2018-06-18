<?php

namespace App\Policies;

use App\User;
use App\Organisation;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrganisationPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->hasRole('super admin')) {
            return true;
        }
    }

    /**
     * Determine whether the user can list the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function list(User $user)
    {
        return $user->can('read organisations');
    }

    /**
     * Determine whether the user can view the organisation.
     *
     * @param  \App\User  $user
     * @param  \App\Organisation  $organisation
     * @return mixed
     */
    public function view(User $user, Organisation $organisation)
    {
        return $user->can('read organisations') && $user->hasAccessTo($organisation);
    }

    /**
     * Determine whether the user can create organisations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create organisations');
    }

    /**
     * Determine whether the user can update the organisation.
     *
     * @param  \App\User  $user
     * @param  \App\Organisation  $organisation
     * @return mixed
     */
    public function update(User $user, Organisation $organisation)
    {
        return $user->can('update organisations') && $user->hasAccessTo($organisation);
    }

    /**
     * Determine whether the user can delete the organisation.
     *
     * @param  \App\User  $user
     * @param  \App\Organisation  $organisation
     * @return mixed
     */
    public function delete(User $user, Organisation $organisation)
    {
        return $user->can('delete organisations') && $user->hasAccessTo($organisation);
    }
}
