<?php

namespace Tests\Browser;

use Facebook\WebDriver\Interactions\Internal\WebDriverCoordinates;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class GPTTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://chat.openai.com')->addCookie("cd_clearence","mzv2PZWVHby9XEAKi9tXOr6LUBBfLtgMX1Bl4HemaCU-1734447765-1.2.1.1-6Xyd4zN5np51aZxEWPiS3AC7Xjf59CcpekiocpRNDdB5gyBP0gwMJWLL3fXO4fGzh6P2ZSCbdna3Y4T1T.50cuNORlOLAjXzpnl9HA_uv4JoA11Cg_z5g8MORgPzBfzqLzBkaBj8IE85zMGJ8Gl5nvGcqDBysxrD04rs4iuGRlR.u3fNnUhrX2L6tPGpHCnodC2bbDAc0nDvRq8lLDfsAWuaLzRdGz33XJr8kDurJASFIDpKc_0qPx1eRzXEWd9ydnvwcqKBQA2dDo0mab2XG3oL8.NL_YH5iVKDCeHP4gVeFlasOHUkhbeJG2gjuEVWURnyFgM8Ge_ZUxUz54cDaEO_52z2fDrElHVJl3vTkW49Wa0ENUKu.Art_t8ZVyI.r_lWxxoVstiVg64JSMVRUg");
            $browser->screenshot('test1.png');
            sleep(1);
            $browser->waitFor('button[data-testid="signup-button"]');
            $browser->click('button[data-testid="signup-button"]');
            sleep(3);
            $browser->resize(1920, 1080);
            $browser->screenshot('test2.png');
            $browser->move(0,0);
            sleep(500);
        });
    }
}