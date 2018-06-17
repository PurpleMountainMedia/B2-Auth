<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\HomePage;

class HomePageTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testHomePageUpAndRunning()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new HomePage)
                    ->assertSee('Home');
        });
    }
}
