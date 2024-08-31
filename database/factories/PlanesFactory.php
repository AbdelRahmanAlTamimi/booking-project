<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Planes;
use App\Models\PlaneTypes;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planes>
 */
class PlanesFactory extends Factory
{
    protected $model = Planes::class;

    public function definition()
    {
        return [
            'plane_type_id' => PlaneTypes::factory(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'total_seats' => $this->faker->numberBetween(100, 300),
        ];
    }
}
