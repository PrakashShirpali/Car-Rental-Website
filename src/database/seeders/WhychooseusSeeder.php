<?php

namespace Database\Seeders;

use App\Models\Whychooseus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhychooseusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Whychooseus::create([
            'title' => 'Flexible Rental Options',
            'descryption' => 'Whether you need a car for a day, a weekend getaway, or an extended vacation, we offer flexible rental durations tailored to your specific needs.',
        ]);

        Whychooseus::create([
            'title' => 'Travel Anywhere in Goa',
            'descryption' => 'Get ready to be awe-struck with Goa sightseeing with our best of chauffeurs in town. Goa never fails to stun its guests with the best of car-rental services at pocket-friendly rates.',
        ]);

        Whychooseus::create([
            'title' => 'Wide Range of Vehicles',
            'descryption' => 'Experience the freedom to choose from a diverse fleet of vehicles, ranging from compact cars to spacious SUVs, ensuring there\'s a perfect match for every journey..',
        ]);

        Whychooseus::create([
            'title' => 'Exceptional Customer Service',
            'descryption' => 'Our dedicated team is committed to providing personalized assistance and ensuring your comfort and satisfaction throughout your rental experience.',
        ]);

        Whychooseus::create([
            'title' => 'Friendly Support',
            'descryption' => 'Count on our helpful customer service team anytime you need assistance.',
        ]);

        Whychooseus::create([
            'title' => 'Safety and Reliability',
            'descryption' => 'Rest assured with our commitment to safety and reliability, with well-maintained vehicles for your security and comfort.',
        ]);
    }
}
