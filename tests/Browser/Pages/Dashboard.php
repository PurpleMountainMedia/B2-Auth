<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class Dashboard extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/dashboard';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@form' => '#user_form_dashboard',
            '@first_name' => '#user_form_field_first_name',
            '@last_name' => '#user_form_field_last_name',
            '@email' => '#user_form_field_email',
            '@phone' => '#user_form_field_phone',
            '@password' => '#user_form_field_password',
            '@password_confirmation' => '#user_form_field_password_confirmation',
            '@product_updates' => '#user_form_field_product_updates_marketing',
            '@product_notifications' => '#user_form_field_product_notifications_marketing',
            '@request_user_data' => '#user_form_field_request_user_data',
            '@save' => '#user_form_submit',
            '@reset' => '#user_form_reset',
        ];
    }
}
