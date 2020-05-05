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
     * @return void
     */
    public function testHomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://internetnodegraphservice.loc')
                    ->waitFor('div.title', 8)
                    ->assertSee('Index')
                    ->assertSee('Proxy Designer')
                    ->assertSee('Deconstructor')
                    ->assertSee('Request Executor')
                    ->click('a [alt=" root "]')
                    ->assertSee('Index');
        });
    }

    /**
     * Test that all the links from the home page work
     *
     * @return void
     */
    public function testHomeLinks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://internetnodegraphservice.loc')
                    ->waitFor('div.title', 8)
                    ->assertSee('Index')
                    ->assertSee('Proxy Designer')
                    ->click('span>a[href="/path/create"]')
                    ->assertSee('Creator')
                    ->click('a [alt=" root "]')
                    ->click('span>a[href="/path/destroy"]')
                    ->assertSee('Destroyer')
                    ->click('a [alt=" root "]')
                    ->click('span>a[href="/path/reuse"]')
                    ->assertSee('Reuser')
                    ->click('a [alt=" root "]')
                    ->assertSee('Index');
        });
    }

}
