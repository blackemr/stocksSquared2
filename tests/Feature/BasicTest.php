<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicTest extends TestCase
{
    /**
     * A basic feature to test that the homepage is working.
     *
     * @return void
     */
    public function test_homepage_connection()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
