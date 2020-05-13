<?php

namespace Tests;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Laravel\Dusk\TestCase as BaseTestCase;

abstract class DuskTestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Prepare for Dusk test execution.
     *
     * @beforeClass
     * @return void
     */
    public static function prepare()
    {
        static::startChromeDriver();
    }

    /**
     * Create the RemoteWebDriver instance.
     *
     * @return \Facebook\WebDriver\Remote\RemoteWebDriver
     */
    protected function driver()
    {
        $options = (new ChromeOptions)->addArguments([
            '--headless',
            '--window-size=1920,1080',
        ]);

        return RemoteWebDriver::create(
            'http://localhost:9515', DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY, $options
            )
        );
    }

    /**
     * Test log in.
     */
    protected static function testLogIn($browser)
    {
        $browser->visit('/');
        $browser->waitFor('a [alt=" login "]', 3)
                ->click('a [alt=" login "]')
                ->waitFor('div.content', 3)
                ->value('input[id="email"]', 'tester@test.loc')
                ->value('input[id="password"]', 'superduper')
                ->press('Login');
    }

    protected static function testLogOut($browser)
    {
        $browser->waitFor('button [alt=" logout "]', 3)
                ->click('button [alt=" logout "]');
    }
}
