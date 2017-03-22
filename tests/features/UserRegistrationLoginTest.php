<?php
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserRegistrationLoginTest extends TestCase
{
    public function testUserRegisters(){
        //Get the username, email and password from user
        $username = 'johndoe';
        $email = 'johndoe@aol.de';
        $password = 'pw01';

        //create new user with data, check if username/email exist
        $user = factory(User::class)->create(['username' => $username, 'email' => $email, 'password' => $password]);

    }
}
