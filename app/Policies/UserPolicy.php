<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function selfUser(User $user,User $current_user)
    {
        return $user->id === $current_user->id ;


    }
}
