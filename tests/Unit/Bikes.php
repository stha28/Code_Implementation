<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Bikes extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);

    }
    
    public function addbikes()
    {
    $data=[
        'Bikename'=>'Harley',
        'bikedetail'=>'asdasd',
        'Quantity'=>'20',
        'Price'=>'20000',
        'bikeimage'=>"Uploads/bikes/14232322bik.jpg",
        'categoryid'=>'3',
        'Userid'=>'1',
    ];
    $response = $this->json('POST','/api/bike',$data);
    $response->assertStatus(200);
    $response->assertSJson(['status'=> true]);
    $response->assertSJson(['message'=> "bike added"]);
    $response->assertSJson(['data'=> $data]);
    }
}


