<?php

use Mockery as M;
use Shamsy\Repositories\UserRepository;

class UserRepositoryTest extends TestCase {

    public function setUp()
    {
        parent::setUp();

        $this->mUser = M::mock('Illuminate\Auth\UserInterface');
        $this->users = new UserRepository($this->mUser);
    }

    public function tearDown()
    {
        M::close();

        parent::tearDown();
    }

    public function test_binding()
    {
        $users = App::make('Shamsy\Repositories\Contracts\UserRepositoryInterface');
        $this->assertInstanceOf('Shamsy\Repositories\UserRepository', $users);
    }

    public function test_creating_user()
    {
        $name = 'a name';
        $email = 'an email';

        $this->mUser->shouldReceive('create')->once()->with(compact('name', 'email'))->andReturn($this->mUser);

        $user = $this->users->create($name, $email);
        $this->assertInstanceOf('Illuminate\Auth\UserInterface', $user);
    }
}
