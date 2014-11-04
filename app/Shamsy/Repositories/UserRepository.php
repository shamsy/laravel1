<?php namespace Shamsy\Repositories;

use Shamsy\Entities\User;
use Illuminate\Auth\UserInterface;

class UserRepository implements Contracts\UserRepositoryInterface {

    /**
     * @var Shamsy\Entities\User
     */
    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function create($name, $email)
    {
        return $this->user->create(compact('name', 'email'));
    }
}
