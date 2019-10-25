<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StaticPagesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    protected $baseTitle;
    protected function setUp(): void
    {
        parent::setUp();

        $this->baseTitle = 'Ruby on Rails Tutorial Sample App';
    }

    
    public function testAccessHome()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertTitleContains('Home | ' . $this->baseTitle)
                    ->assertSee('Sample App');
            
        });
    }

    public function testAccessHelp()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/help')
                    ->assertTitleContains('Help | ' . $this->baseTitle);
        });
    }

    public function testAccessAbout()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/about')
                    ->assertTitleContains('About | ' . $this->baseTitle);
        });
    }

    public function testAccessContact()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    ->assertTitleContains('Contact | ' . $this->baseTitle);
        });
    }
}
