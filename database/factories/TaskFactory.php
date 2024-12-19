<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Client;
use App\Models\Project;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::pluck('id');
        $client = Client::pluck('id');
        $project = Project::pluck('id');

        return [
            'title' => $this->faker->sentence(6), 
            'description' => $this->faker->paragraph(), 
            'user_id' => $user->random(), // Associates a random user
            'client_id' => $client->random(), // Associates a random client
            'project_id' => $project->random(), // Associates a random project
            'deadline_at' => $this->faker->dateTimeBetween('now', '+6 months')->format('Y-m-d'), // Deadline within 6 months
            'status' => $this->faker->randomElement(['open', 'in-progress', 'pending', 'waiting-client', 'blocked', 'closed']), // Random status
        ];
    }
}
