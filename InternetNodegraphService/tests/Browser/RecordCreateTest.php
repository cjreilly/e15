<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RecordCreateTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @group all
     * @group foundational
     * @return void
     */
    public function testCreateWithHost()
    {
        $this->browse(function (Browser $browser) {
                $browser->visit('/')
                ->waitFor('div.title',3)
                ->assertSee('Index')
                ->assertSee('Proxy Designer')
                ->click('span>a[href="/path/create"]')
                ->assertSee('Create')
                ->assertSee('server')
                ->type('input#server', 'nodegraph')
                ->press('Reserve')
                ->waitFor('span>a[id="ins-link"]')
                ->assertPresent('span>[id="ins-link"]');
                });
    }
    /**
     * A test example with these fields filled: server, port, path, query
     *
     * @group all
     * @group foundational
     * @return void
     */
    public function testCreateWithHostPortPathQuery()
    {
        $this->browse(function (Browser $browser) {
                $browser->visit('/')
                ->waitFor('div.title',3)
                ->assertSee('Index')
                ->assertSee('Proxy Designer')
                ->click('span>a[href="/path/create"]')
                ->assertSee('Create')
                ->assertSee('server')
                ->value('input[id="server"]', 'nodegraph')
                ->assertSee('port')
                ->value('input[id="port"]', '80')
                ->assertSee('path')
                ->value('input[id="path"]', "graphpath")
                ->assertSee('query')
                ->value('input[id="query"]', "serverquery")
                ->press('Reserve')
                ->assertPresent('span>a[id="ins-link"]');
                });
    }
    /**
     * A test example with no fields filled.
     *
     * @group all
     * @group foundational
     * @return void
     */
    public function testCreateWithNoInput()
    {
        $this->browse(function (Browser $browser) {
                $browser->visit('/')
                ->waitFor('div.title',3)
                ->assertSee('Index')
                ->assertSee('Proxy Designer')
                ->click('span>a[href="/path/create"]')
                ->assertSee('Create')
                ->assertSee('server')
                ->assertSee('port')
                ->assertSee('path')
                ->assertSee('query')
                ->press('Reserve')
                ->assertSee('The server field is required.');
                });
    }
}
