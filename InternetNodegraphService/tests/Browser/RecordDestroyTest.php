<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RecordDestroyTest extends DuskTestCase
{
    /**
     * A test example with these fields filled: server, port, path, query
     *
     * @group all
     * @group foundational
     * @return void
     */
    public function testCreateAndDestroyWithHost()
    {
        $this->browse(function (Browser $browser) {
                DuskTestCase::testLogIn($browser);
                $browser->visit('/')
                ->waitFor('div.title',3)
                ->assertSee('Index')
                ->assertSee('Proxy Designer')
                ->click('span>a[href="/path/create"]')
                ->assertSee('Create')
                ->assertSee('server')
                ->value('input[id="server"]', "nodegraph-full")
                ->press('Reserve')
                ->assertPresent('span>a[id="ins-link"]');
                $tag = $browser->text('span>a[id="ins-link"]');
                $browser->click('a [alt=" root "]')
                ->waitFor('div.title',3)
                ->assertSee('Deconstructor')
                ->click('span>a[href="/path/destroy')
                ->assertSee('Destroy')
                ->type('input[id="path"]', $tag)
                ->press('Remove')
                ->assertSee('Destroy')
                ->assertDontSee('The server record does not exist');
                DuskTestCase::testLogOut($browser);
        });
    }
}
