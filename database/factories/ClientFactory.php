<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $projectTypes = ['web', 'api', 'desktop', 'mobile'];

        return [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'email'=>$this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'project_type' => $this->faker->randomElement($projectTypes),
            'project_description' => $this->faker->paragraph,
        ];
    }
}
