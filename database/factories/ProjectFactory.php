<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'user_id' => User::inRandomOrder()->first()->id,
            'client_id' => Client::inRandomOrder()->first()->id,
            'deadline_at' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'status' => $this->faker->randomElement(['open', 'in-progress', 'block', 'cancelled', 'completed']), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
