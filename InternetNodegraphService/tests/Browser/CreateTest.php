<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testCreateWithHost()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://internetnodegraphservice.loc')
                    ->waitFor('div.title', 8)
                    ->assertSee('Index')
                    ->assertSee('Proxy Designer')
                    ->click('span>a[href="/path/create"]')
                    ->assertSee('Creator')
                    ->assertSee('server')
                    ->type('server', "nodegraph-partial")
                    ->press('Reserve')
                    ->waitFor('div.title', 8)
                    ->assertPresent('span>a[id="ins-link"]');
        });
    }
    /**
     * A test example with these fields filled: server, port, path, query
     *
     * @return void
     */
    public function testCreateWithHostPortPathQuery()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://internetnodegraphservice.loc')
                    ->waitFor('div.title', 8)
                    ->assertSee('Index')
                    ->assertSee('Proxy Designer')
                    ->click('span>a[href="/path/create"]')
                    ->assertSee('Creator')
                    ->assertSee('server')
                    ->type('input#server', "nodegraph-full")
                    ->assertSee('port')
                    ->click('port')
                    ->type('input#port', "80")
                    ->assertSee('path')
                    ->click('path')
#                    ->type('input#path', "graphpath")
#                    ->assertSee('query')
#                    ->click('query')
#                    ->type('input#query', "serverquery")
                    ->press('Reserve')
                    ->waitFor('div.title', 8)
                    ->assertPresent('span>a[id="ins-link"]');
        });
    }
    /**
     * A test example with no fields filled.
     *
     * @return void
     */
    public function testCreateWithNoInput()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://internetnodegraphservice.loc')
                    ->waitFor('div.title', 8)
                    ->assertSee('Index')
                    ->assertSee('Proxy Designer')
                    ->click('span>a[href="/path/create"]')
                    ->assertSee('Creator')
                    ->assertSee('server')
                    ->assertSee('port')
                    ->assertSee('path')
                    ->assertSee('query')
                    ->press('Reserve')
                    ->waitFor('div.title', 8)
                    ->assertSee('The server field is required.');
        });
    }
}
