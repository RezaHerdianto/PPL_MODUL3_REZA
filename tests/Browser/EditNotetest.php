<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotetest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group edit
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
            -> clickLink('Log in')
            -> type ('email', 'reza@gmail.com')
            -> type ('password', '1202220365')
            -> press('LOG IN')
            ->assertPathIs('/dashboard')
            -> visit('/notes')
            -> assertSee('Modul 3')
            -> clicklink ('Edit')
            -> type ('description', 'Otak makin pusing')
            -> type ('title', 'Selesai')
            -> press('UPDATE')
            ->visit('/notes');
        });
    }
}
