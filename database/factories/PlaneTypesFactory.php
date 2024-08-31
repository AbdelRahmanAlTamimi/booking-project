<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PlaneTypes;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlaneTypes>
 */
class PlaneTypesFactory extends Factory
{
    protected $model = PlaneTypes::class;

    public function definition()
    {
        return [
            'type_name' => $this->faker->word,
        ];
    }
}
