<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\Status;
use App\Models\Ticket;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'first' => 'John',
//            'last' => 'Smith',
//            'email' => 'test@example.com',
//        ]);
        $increment = 10;
        User::factory()->count($increment)->create();
        for ($i = 0; $i < $increment; $i++) {
            $ticket = Ticket::factory()->create(['user_id' => User::all()->random()->id]);
            Status::factory()->create(['ticket_id' => $ticket->id]);
            Message::factory()->count(rand(1,6))->create(['ticket_id' => $ticket->id,'user_id' => User::all()->random()->id]);
        }
    }
}
