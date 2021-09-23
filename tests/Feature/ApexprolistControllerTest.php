<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Apexprolist;

class ApexprolistControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_apexprolist()
    {
        $item = Apexprolist::factory()->create();
        $response = $this->get('/api/v1/apexprolist'); 
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'message' => $item->message,
            'url' => $item->url
        ]);
    }
}
