<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\Dashboard;
use App\User;

class DashboardTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSubmitForm()
    {
        $user = factory(User::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $new_user_data = factory(User::class)->make();

            $browser->maximize();

            $browser->loginAs($user)
                    ->visit(new Dashboard)
                    ->type('@first_name', $new_user_data->first_name)
                    ->type('@last_name', $new_user_data->last_name)
                    ->type('@email', $new_user_data->email)
                    ->type('@phone', $new_user_data->phone)
                    ->type('@password', $new_user_data->name)
                    ->type('@password_confirmation', $new_user_data->name)
                    ->scrollTo('500')
                    ->press('@save');

            $browser->waitFor('@success_message', 1);

            $browser->assertVue('userForm.first_name', $new_user_data->first_name, '@user-form-component')
                    ->assertVue('userForm.last_name', $new_user_data->last_name, '@user-form-component')
                    ->assertVue('userForm.email', $new_user_data->email, '@user-form-component')
                    ->assertVue('userForm.phone', $new_user_data->phone, '@user-form-component')
                    ->assertVue('userForm.password', null, '@user-form-component')
                    ->assertVue('userForm.password_confirmation', null, '@user-form-component');

            $browser->screenshot('User Updated');
        });
    }
}
