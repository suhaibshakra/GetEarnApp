<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response_login_page()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

       /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response_register_page()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}
