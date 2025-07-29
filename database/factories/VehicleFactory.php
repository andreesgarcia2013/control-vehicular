<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
            'plate' => strtoupper($this->faker->bothify('???####')),
            'brand' => $this->faker->randomElement(['Toyota', 'Ford', 'Nissan', 'Honda', 'Chevrolet', 'Seat', 'Mitsubishi']),
            'model' => $this->faker->word(),
            'year' => $this->faker->numberBetween(2000, 2025),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
