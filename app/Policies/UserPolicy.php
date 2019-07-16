<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //更新授权
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    //删除授权
    public function destroy(User $currentUser, User $user)
    {
        return $currentUser->is_admin && $currentUser->id !== $user->id;
    }

    /**
     * 关注授权
     * 自己不能关注自己
     * @param User $currentUser
     * @param User $user
     * @return bool
     */
    public function follow(User $currentUser, User $user)
    {
        return $currentUser->id !== $user->id;
    }
}
