<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Car::truncate();

        Car::create([
            'image_url' => 'images/cars/1 baleno manual.png',
            'model_name' => 'Maruti Baleno Manual',
            'category' => 'Hatchback',
        ]);

        Car::create([
            'image_url' => 'images/cars/2 baleno auto.png',
            'model_name' => 'Maruti Baleno Automatic',
            'category' => 'Hatchback',
        ]);

        Car::create([
            'image_url' => 'images/cars/3 swift manual.png',
            'model_name' => 'Maruti Suzuki Swift Manual',
            'category' => 'Hatchback',
        ]);

        Car::create([
            'image_url' => 'images/cars/4 swift automatic.png',
            'model_name' => 'Maruti Suzuki Swift Automatic',
            'category' => 'Hatchback',
        ]);

        Car::create([
            'image_url' => 'images/cars/5 i20 manual.png',
            'model_name' => 'Hyundai i20 Manual',
            'category' => 'Hatchback',
        ]);

        Car::create([
            'image_url' => 'images/cars/6 i20 automatic.webp',
            'model_name' => 'Hyundai i20 Automatic',
            'category' => 'Hatchback',
        ]);

        Car::create([
            'image_url' => 'images/cars/7 dzire manual.png',
            'model_name' => 'Swift Dzire Manual',
            'category' => 'Sedan',
        ]);

        Car::create([
            'image_url' => 'images/cars/8 dzire auto.png',
            'model_name' => 'Swift Dzire Automatic',
            'category' => 'Sedan',
        ]);

        Car::create([
            'image_url' => 'images/cars/9 i10 manual.png',
            'model_name' => 'Hyundai i10 Manual',
            'category' => 'Hatchback',
        ]);

        Car::create([
            'image_url' => 'images/cars/10 wagonr manual.png',
            'model_name' => 'Maruti Suzuki WagonR Manual',
            'category' => 'Hatchback',
        ]);

        Car::create([
            'image_url' => 'images/cars/11 ignis.jpg',
            'model_name' => 'Suzuki Ignis Manual',
            'category' => 'Hatchback',
        ]);

        Car::create([
            'image_url' => 'images/cars/12 ignis auto.jpg',
            'model_name' => 'Suzuki Ignis Automatic',
            'category' => 'Hatchback',
        ]);

        Car::create([
            'image_url' => 'images/cars/13 breeza manual.webp',
            'model_name' => 'Maruti Vitara Brezza Manual',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/14 breeza automatic.png',
            'model_name' => 'Maruti Vitara Brezza Automatic',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/15 creta manual.png',
            'model_name' => 'Hyundai Creta Manual',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/16 creta automatic.jpg',
            'model_name' => 'Hyundai Creta Automatic',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/17 venue manual.png',
            'model_name' => 'Hyundai Venue Manual',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/18 venue automatic.png',
            'model_name' => 'Hyundai Venue Automatic',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/19 ertiga manual.webp',
            'model_name' => 'Maruti Suzuki Ertiga Manual',
            'category' => 'MPV',
        ]);

        Car::create([
            'image_url' => 'images/cars/20 ertiga automatic.png',
            'model_name' => 'Maruti Suzuki Ertiga Automatic',
            'category' => 'MPV',
        ]);

        Car::create([
            'image_url' => 'images/cars/21 innova crysta manual.png',
            'model_name' => 'Toyota Innova Crysta Manual',
            'category' => 'MPV',
        ]);

        Car::create([
            'image_url' => 'images/cars/22 innova crysta automatic.png',
            'model_name' => 'Toyota Innova Crysta Automatic',
            'category' => 'MPV',
        ]);

        Car::create([
            'image_url' => 'images/cars/23 kia carens manual.png',
            'model_name' => 'Kia Carens Manual',
            'category' => 'MPV',
        ]);

        Car::create([
            'image_url' => 'images/cars/24 kia carens automatic.png',
            'model_name' => 'Kia Carens Automatic',
            'category' => 'MPV',
        ]);

        Car::create([
            'image_url' => 'images/cars/25 alcazar manual.jpg',
            'model_name' => 'Hyundai Alcazar Manual',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/26 alcazar automatic.png',
            'model_name' => 'Hyundai Alcazar Automatic',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/27 hycross manual.webp',
            'model_name' => 'Toyota Innova Hycross Manual',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/28 hycross automatic.webp',
            'model_name' => 'Toyota Innova Hycross Automatic',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/29 thar manual.png',
            'model_name' => 'Mahindra Thar Manual',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/30 thar automatic.png',
            'model_name' => 'Mahindra Thar Automatic',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/31 kia carnival manual.png',
            'model_name' => 'Kia Carnival Manual',
            'category' => 'MPV',
        ]);

        Car::create([
            'image_url' => 'images/cars/32 kia carnival auto.png',
            'model_name' => 'Kia Carnival Automatic',
            'category' => 'MPV',
        ]);

        Car::create([
            'image_url' => 'images/cars/33 endeavour manual.jpg',
            'model_name' => 'Ford Endeavour Manual',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/34 endeavour automatic.png',
            'model_name' => 'Ford Endeavour Automatic',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/35 fortuner manual.png',
            'model_name' => 'Toyota Fortuner Manual',
            'category' => 'SUV',
        ]);

        Car::create([
            'image_url' => 'images/cars/36 fortuner automatic.png',
            'model_name' => 'Toyota Fortuner Automatic',
            'category' => 'SUV',
        ]);
    }
}
