<?php

namespace Database\Seeders;

use App\Models\Navlink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavlinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Navlink::create([
            'route_name' => 'home',
            'display_name' => 'Home',
        ]);

        Navlink::create([
            'route_name' => 'about',
            'display_name' => 'About Us',
        ]);

        Navlink::create([
            'route_name' => 'cars',
            'display_name' => 'Cars',
        ]);

        Navlink::create([
            'route_name' => 'contact',
            'display_name' => 'Contact Us',
        ]);
    }
}
