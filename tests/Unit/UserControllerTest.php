<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    /**
     * Test login method with incorrect credentials.
     *
     * @return void
     */
    public function testLoginIncorrectCredentials()
    {
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'incorrect-password'
        ]);
        $response->assertStatus(200);
        $response->assertSee('username or password not correct!');
        // Add more assertions as per your requirements
    }
}
    