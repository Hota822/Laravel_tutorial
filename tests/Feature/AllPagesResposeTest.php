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
        $response->assertStatus(200)
                 ->assertViewIs('static_pages.home');
        //$response->assertSee('Home | ' . $this->baseTitle);

        ///$response = $this->get(self::TO . "/help");
        $response = $this->get(url('help'));
        $response->assertStatus(200)
                 ->assertViewIs('static_pages.help');


        $response = $this->get(url('about'));
        $response->assertStatus(200)
                 ->assertViewIs('static_pages.about');


        $response = $this->get(url('contact'));
        $response->assertStatus(200)
                 ->assertViewIs('static_pages.contact');
    }
}
