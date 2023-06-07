<?php

namespace Database\Seeders;

use App\Models\Service;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 10) as $index){
            $faker = Faker::create();

            Service::create([
                'title'  => $faker->name,
                'image'  => $faker->imageUrl,
            ]);
        }
    }
}
