<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
                -> clickLink('Register')
                -> type ('name', 'reza')
                -> type ('email', 'reza@gmail.com')
                -> type ('password', '1202220365')
                -> type ('password_confirmation', '1202220365')
                -> press('REGISTER')
                ->assertPathIs('/dashboard');
        });
    }
}
