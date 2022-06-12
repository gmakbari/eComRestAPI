<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProductTest extends TestCase
{
    
    public function test_index()
    {
        $response = $this->get('/api/products');

        $response->assertStatus(200);
    }

    public function test_show_product()
    {
    	
    	$this->get("/api/products/1")
    	->assertStatus(200);
    }

    // public function test_can_insert_product()
    // {

    // 	$data = [
    //             "name" => "Product name",
    //             "price" => "100",
    //             "stock" => "4",
    //             "discount" => "3",
    //             "description" => "This is a sample product"
    //     ];

    //     $this->post(route('store',$data))->assertStatus(200);
    // }
}
