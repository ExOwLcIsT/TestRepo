<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CountH1Test extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $url = '/';
            $html = $browser->visit($url)->script('return document.body.innerHTML')[0];
            echo $html;
            echo preg_match_all('#<h1>.*</h1>#', $html);
            sleep(5);
        });
    }
}
