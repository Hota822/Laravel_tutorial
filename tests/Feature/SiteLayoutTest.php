<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Helpers\Helper;

class SiteLayoutTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSiteLayout()
    {
        $response = $this->get('/');

        $response->assertSee(url('/'))
                 ->assertSee(url('help'))
                 ->assertSee(url('about'))
                 ->assertSee(url('contact'))
                 ->assertSee(Helper::fullTitle('Home'));
    }
}
