<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AtControllerTest extends TestCase
{
    /**
     * Test index method.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/at');
        $response->assertStatus(200);
        
    }

    /**
     * Test create method.
     *
     * @return void
     */
    public function testCreate()
    {
        $response = $this->get('/at/create');
        $response->assertStatus(200);
      
    }


    /**
     * Test show method.
     *
     * @return void
     */
    public function testShow()
    {
        $response = $this->get('/at/1');
        $response->assertStatus(200);
        // Add more assertions as per your requirements
    }

    /**
     * Test edit method.
     *
     * @return void
     */
    public function testEdit()
    {
        $response = $this->get('/at/1/edit');
        $response->assertStatus(200);
        // Add more assertions as per your requirements
    }

   
}
