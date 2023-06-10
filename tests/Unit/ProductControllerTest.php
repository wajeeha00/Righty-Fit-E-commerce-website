<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\help;
use App\Models\aboutus;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Wish;

use Tests\TestCase;
use App\Models\Product;
use App\Models\User;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGetAllProducts()
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
    }

   
    public function testDisplayReturnsViewWithData()
    {
        $response = $this->get('/help');
        $response->assertStatus(200);
        $response->assertViewHas('info');
    }
    
}

