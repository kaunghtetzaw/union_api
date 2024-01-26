<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "sex" => $this->faker->randomElement(['male', 'female']),
            "age" => $this->faker->numberBetween($min = 1, $max = 100),
            "address" => $this->faker->address(),
            "treatment_start_date" => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
            "vot" => $this->faker->boolean(),
            "user_id" => $this->faker->randomElement([1,2,3,4]),
        ];
    }
}
