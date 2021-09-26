<?php

namespace Database\Factories;

use App\Models\Apexprolist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ApexprolistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apexprolist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team' => str::random(10),
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
            //
        ];
    }
}
