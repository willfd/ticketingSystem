<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Status>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticket_id' => Ticket::factory(),
            'status' => fake()->randomElement(['new', 'processing', 'pending', 'awaiting', 'resolved', 'expired'])
        ];
    }

}
