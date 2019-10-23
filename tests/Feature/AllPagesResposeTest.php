<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AllPagesResponseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    const to = 'static_pages';

    protected $baseTitle = '';
    protected function setUp(): void
    {
        parent::setUp();
        //$this->baseTitle = 'Ruby on Rails Tutorial Sample App';
    }
    
    public function testAccess()
    {
        // echo "\n=================\n";
        // echo "in testAccess()\n" . var_dump($this);
        // echo "\n=================\n";        

        $response = $this->get('/');
        $response->assertStatus(200);
        //$response->assertSee('Home | ' . $this->baseTitle);

        $response = $this->get(self::to . "/help");
        $response->assertStatus(200);
        //$response->assertSee('help | ' . $this->baseTitle);

        $response = $this->get(self::to . "/about");
        $response->assertStatus(200);
        //$response->assertSee('about | ' . $this->baseTitle);

        $response = $this->get(self::to . "/contact");
        $response->assertStatus(200);
    }
}
