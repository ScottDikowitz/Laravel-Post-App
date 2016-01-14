<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }
    use DatabaseTransactions;

    public function testNewUserRegistration()
    {
        $this->visit('auth/register')
            ->type('scott', 'name')
            ->type('myemail@hello.com', 'email')
            ->type('hello1', 'password')
            ->type('hello1', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/posts');
    }

    public function testLogOut()
    {
      $this->visit('auth/register')
          ->type('scott', 'name')
          ->type('myemail@hello.com', 'email')
          ->type('hello1', 'password')
          ->type('hello1', 'password_confirmation')
          ->press('Register')
           ->click('Log out')
           ->seePageIs('/');
    }

    public function testCreatePost()
    {
      $user = factory(App\User::class)->create();
      $this->actingAs($user)
      ->visit('/posts')
      ->click('New Post')
      ->see('Make Post')
      ->type('yeehaw', 'title')
      ->type('partner', 'body')
      ->press('Create')
      ->seePageIs('/posts')
      ->see('yeehaw');
      // ->submitForm('Create', ['title' => 'one', 'body' => 'two']);
    }

    public function testPostAuthorization()
    {
      $this->visit('/posts')
      ->click('New Post')
      ->seePageIs('/login');
    }
}
