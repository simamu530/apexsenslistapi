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
            'message' => Str::random(10),
            'url' => $this->faker->url,
            //
        ];
    }
}
