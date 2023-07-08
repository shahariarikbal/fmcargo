<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Service;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 9) as $index){
            $faker = Faker::create();

            Blog::create([
                'title'  => $faker->name,
                'title_bn'  => 'ডেমো টাইটেল',
                'slug'  => Str::slug($faker->name),
                'description'  => $faker->sentence,
                'description_bn'  => 'ডেমো ডেসক্রিপশন',
                'image'  => $faker->imageUrl,
            ]);
        }
    }
}
