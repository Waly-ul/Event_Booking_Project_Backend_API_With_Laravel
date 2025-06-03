<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsSeedersTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Event::create([
            'ticket_price' => 500,
            'title' => 'Coding Interview Preparation',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut.",
            'start_date' => now()->addDays(7),
            'end_date' => now()->addDays(7)->addHours(5)
        ]);
        Event::create([
            'ticket_price' => 1000,
            'title' => 'Build your first project with PHP',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut.",
            'start_date' => now()->addDays(8),
            'end_date' => now()->addDays(8)->addHours(5)
        ]);
        Event::create([
            'ticket_price' => 1500,
            'title' => 'ASP.NET core journey',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut.",
            'start_date' => now()->addDays(9),
            'end_date' => now()->addDays(9)->addHours(5)
        ]);
    }
}
