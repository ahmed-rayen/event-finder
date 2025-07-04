<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Jazz Night',
            'date' => '2025-07-15',
            'time' => '19:00:00',
            'location' => 'Blue Note Club',
            'city' => 'New York',
            'category' => 'Music',
            'description' => 'An evening of live jazz performances.',
        ]);

        Event::create([
            'title' => 'Tech Meetup',
            'date' => '2025-07-20',
            'time' => '18:30:00',
            'location' => 'Tech Hub',
            'city' => 'San Francisco',
            'category' => 'Tech',
            'description' => 'Networking event for tech enthusiasts.',
        ]);

        Event::create([
            'title' => 'Art Exhibition',
            'date' => '2025-07-25',
            'time' => '10:00:00',
            'location' => 'City Gallery',
            'city' => 'New York',
            'category' => 'Art',
            'description' => 'Showcase of local artists.',
        ]);
    }
}
