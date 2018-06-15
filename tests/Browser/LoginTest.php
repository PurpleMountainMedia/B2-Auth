<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginForm()
    {
        $user = factory(User::class)->create();

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertPathIs('/dashboard');
        });
    }
}
