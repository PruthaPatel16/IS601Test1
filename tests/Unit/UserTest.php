<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testUserCount()
    {
        $users = User::All();
        $recordCount = $users->count();
        $userCount = 50;
        $this->assertEquals($userCount,50);
    }

    public function testInsertUser()
    {
        $user = new User();
        $user->name= 'New User';
        $user->email= 'user@email.com';
        $user->password= 'UserPass';

        $this->assertTrue($user->save());
    }
}