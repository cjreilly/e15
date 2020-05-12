<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * Test system behavior at index limits
 */
class IndexLimitTest extends DuskTestCase
{
    /**
     * Store tumbler state
     */
    private static $tumblerState="";
    /**
     * Rotate the tumblerState string
     */
    private static function rotateTumbler()
    {
        $rotatedString="";
        if (IndexLimitTest::$tumblerState=="") {
            IndexLimitTest::$tumblerState="A";
        } else {
            $lastBackwardRotationIndex=1;
            $next="A";
            while ($next == "A" && $lastBackwardRotationIndex <= strlen(IndexLimitTest::$tumblerState)) {
                $last=substr(IndexLimitTest::$tumblerState,strlen(IndexLimitTest::$tumblerState)-$lastBackwardRotationIndex);
                $next = chr((((ord($last)+1)-65)%26)+65);
                IndexLimitTest::$tumblerState = substr_replace(IndexLimitTest::$tumblerState, $next,
                        strlen(IndexLimitTest::$tumblerState)-$lastBackwardRotationIndex,1);
                $lastBackwardRotationIndex+=1;
            }
            if ($next == "A" && $lastBackwardRotationIndex > strlen(IndexLimitTest::$tumblerState)) {
                IndexLimitTest::$tumblerState .= $next;
            }
        }
    }
    /**
     * Test behavior when the system reaches index limits.
     *
     * @group long
     * @return void
     */
    public function testIndexLimit()
    {
        dump("Tip: use `php artisan dusk --group=all` to run all tests.");
        dump("Warning: this test may require upwards of 30 minutes to complete .");
        $this->browse(function (Browser $browser) {
            for ($i = 0; $i<262143; $i++) {
                $this::rotateTumbler();
                $browser->visit('/path/create')
                ->waitFor('div.title',3)
                ->assertSee('Create')
                ->value('input[id="server"]', IndexLimitTest::$tumblerState)
                ->press('Reserve')
                ->waitFor('span>a[id="ins-link"]',3)
                ->assertPresent('span>[id="ins-link"]');
            }
        });
    }
}
