<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use App\Models\InviteCode;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_allowed_view_page()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/product');

        $response->assertStatus(200);
    }

    public function test_see_product()
    {
        $user = User::factory()->create();
        $product = Product::create([
            'name' => 'TestProduct',
            'price' => 100
        ]);
        $response = $this->actingAs($user)->get('/product');
        $response->assertSee($product->name);
    }
}
