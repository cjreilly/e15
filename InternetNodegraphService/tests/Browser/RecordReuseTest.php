<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RecordReuseTest extends DuskTestCase
{
    /**
     * Validate the reuse feature through the reuse page.
     *
     * @group all
     * @group foundational
     * @return void
     */
    public function testReuseByForm()
    {
        $this->browse(function (Browser $browser) {
                $browser->visit('/')
                ->waitFor('div.title',3)
                ->assertSee('Index')
                ->assertSee('Proxy Designer')
                ->click('span>a[href="/path/create"]')
                ->assertSee('Create')
                ->assertSee('server')
                ->value('input[id="server"]', "http://internetnodegraphservice.loc")
                ->press('Reserve')
                ->assertPresent('span>a[id="ins-link"]');
                $tag = $browser->text('span>a[id="ins-link"]');
                $browser->click('a [alt=" root "]')
                ->waitFor('div.title',3)
                ->assertSee('Deconstructor')
                ->click('span>a[href="/path/reuse')
                ->assertSee('Reuse')
                ->type('input[id="path"]', $tag)
                ->press('Execute')
                ->waitFor('div.title',3)
                ->assertSee('Index');
        });
    }
    /**
     * Validate the reuse feature through the link.
     *
     * @group all
     * @group foundational
     * @return void
     */
    public function testReuseByLink()
    {
        $this->browse(function (Browser $browser) {
                $browser->visit('/')
                ->waitFor('div.title',3)
                ->assertSee('Index')
                ->assertSee('Proxy Designer')
                ->click('span>a[href="/path/create"]')
                ->assertSee('Create')
                ->assertSee('server')
                ->value('input[id="server"]', "http://internetnodegraphservice.loc")
                ->press('Reserve')
                ->assertPresent('span>a[id="ins-link"]');
                $tag = $browser->text('span>a[id="ins-link"]');
                $browser->click('span>a[id="ins-link"]')
                ->waitFor('div.title',3)
                ->assertSee('Index');
        });
    }
}
