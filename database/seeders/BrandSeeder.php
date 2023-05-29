<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 30) as $index){
            $faker = Faker::create();

            Brand::create([
                'name'  => $faker->name,
                'slug'  => Str::slug($faker->name),
                'status'  => 1,
            ]);
        }
    }
}
