<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 30) as $index){
            $faker = Faker::create();

            Category::create([
                'name'  => $faker->name,
                'name_bn'  => 'ডেমো নাম',
                'slug'  => Str::slug($faker->name),
                'status'  => 1,
            ]);
        }
    }
}
