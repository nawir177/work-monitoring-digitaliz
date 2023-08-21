<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, 10),
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'phone' => $this->faker->phoneNumber,
            'date_birth' => $this->faker->date,
            'place_birth' => $this->faker->city,
            'hire_date' => $this->faker->date,
            'position' => $this->faker->randomElement(['Programmer', 'Graphic Designer', 'Data Analyst']),
            'address' => $this->faker->address,
            'verified'=>true
        ];
    }
}
