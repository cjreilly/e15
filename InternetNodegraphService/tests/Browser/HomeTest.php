<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomeTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @group all
     * @group foundational
     * @return void
     */
    public function testFirstVisit()
    {
        $this->browse(function (Browser $browser) {
                $browser->visit('/')
                ->assertSee('Index')
                ->assertSee('Log in for options')
                ->click('a [alt=" root "]')
                ->waitFor('div.title',3)
                ->assertSee('Index');
                });
    }

    /**
     * Test that all the links from the home page work
     *
     * @group all
     * @group foundational
     * @return void
     */
    public function testHomeLinks()
    {
        $this->browse(function (Browser $browser) {
                DuskTestCase::testLogIn($browser);
                $browser->visit('/')
                ->waitFor('div.title',3)
                ->assertSee('Index')
                ->assertSee('Proxy Designer')
                ->click('span>a[href="/path/create"]')
                ->assertSee('Create')
                ->click('a [alt=" root "]')
                ->waitFor('div.title',3)
                ->click('span>a[href="/path/destroy"]')
                ->assertSee('Destroy')
                ->click('a [alt=" root "]')
                ->waitFor('div.title',3)
                ->click('span>a[href="/path/reuse"]')
                ->assertSee('Reuse')
                ->click('a [alt=" root "]')
                ->waitFor('div.title',3)
                ->assertSee('Index');
                DuskTestCase::testLogOut($browser);
                });
    }
}
