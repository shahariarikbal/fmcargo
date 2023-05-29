<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 50) as $index){
            $faker = Faker::create();

            Product::create([
                'name'  => $faker->name,
                'slug'  => Str::slug($faker->name),
                'sku'  => $faker->randomDigit(),
                'cat_id'  => 1,
                'brand_id'  => 1,
                'price'  => 300,
                'qty'  => 10,
                'short_description'  => $faker->paragraph,
                'long_description'  => $faker->paragraph,
                'image'  => $faker->imageUrl,
                'gallery_image'  => '["165000021, 168574120, 1853664712"]',
            ]);
        }
    }
}
