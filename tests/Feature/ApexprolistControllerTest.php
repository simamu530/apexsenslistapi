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
            'team' => $item->team,
            'name' => $item->name,
            'dpi' => $item->dpi,
            'mousesens' => $item->mousesens,
            'multisens' => $item->multisens,
            'hz' => $item->hz,
            'fov' => $item->fov,
            'mouse' => $item->mouse,
            'monitor' => $item->monitor,
            'gpu' => $item->gpu,
            'resolution' => $item->resolution,
            'mousepad' => $item->mousepad,
            'keyboard' => $item->keyboard,
            'headset' => $item->headset,
        ]);
    }
    public function test_store_apexprolist()
    {
        $data = [
            'team' => 'storeteam',
            'name' => 'simamu1',
            'dpi' => 800,
            'mousesens' => 1.60,
            'multisens' => 1.60,
            'hz' => 1000,
            'fov' => 104,
            'mouse' => 'Gpro',
            'monitor' => 'Qnix',
            'gpu' => '1080',
            'resolution' => '1080×1080',
            'mousepad' => 'G640',
            'keyboard' => 'Realforce',
            'headset' => 'IEpro40',
        ];
        $response = $this->post('api/v1/apexprolist', $data);
        $response->assertStatus(201);
        $response->assertJsonFragment($data);
        $this->assertDatabaseHas('apexprolists', $data);
    }
    public function test_show_apexprolist()
    {
        $item = Apexprolist::factory()->create();
        $response = $this->get('/api/v1/apexprolist/' . $item->id);
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'team' => $item->team,
            'name' => $item->name,
            'dpi' => $item->dpi,
            'mousesens' => $item->mousesens,
            'multisens' => $item->multisens,
            'hz' => $item->hz,
            'fov' => $item->fov,
            'mouse' => $item->mouse,
            'monitor' => $item->monitor,
            'gpu' => $item->gpu,
            'resolution' => $item->resolution,
            'mousepad' => $item->mousepad,
            'keyboard' => $item->keyboard,
            'headset' => $item->headset,
        ]);
    }

}
