<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    protected $protected_routes = [
        '/dashboard',
        '/organisations',
        '/schools',
        '/licences',
        '/logout',
    ];

    /**
     * Un authed users should be redirected to login.
     *
     * @return void
     */
    public function testProtectedRoutesRedirectToLogin()
    {
        foreach ($this->protected_routes as $key => $route) {
            $response = $this->get($route);
            $response->assertRedirect('/login');
        }
    }

    /**
     * Logged in users can view pages.
     *
     * @return void
     */
    public function testProtectedRoutesAreAccessableToLoggedInUsers()
    {
        $user = factory(User::class)->create();

        foreach ($this->protected_routes as $key => $route) {
            $response = $this->actingAs($user)->get($route);
            $response->assertStatus(200);
        }
    }
}
