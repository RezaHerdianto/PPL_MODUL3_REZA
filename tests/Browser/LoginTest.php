<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
                -> clickLink('Log in')
                -> type ('email', 'reza@gmail.com')
                -> type ('password', '1202220365')
                -> press('LOG IN')
                ->assertPathIs('/dashboard');
        });
    }
}
