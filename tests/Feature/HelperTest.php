<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Helpers\Helper;

class HelperTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFullTitle()
    {
        $title = 'Home | Ruby on Rails Tutorial Sample App';
        self::assertEquals($title, Helper::fullTitle('Home'));

    }
}
