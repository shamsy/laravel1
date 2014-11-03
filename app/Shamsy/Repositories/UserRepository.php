<?php namespace Shamsy\Repositories;

use Shamsy\Entities\User;

class UserRepository implements Contracts\UserRepositoryInterface {

    /**
     * @var Shamsy\Entities\User
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
