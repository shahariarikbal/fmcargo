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
                'name_en'  => $faker->name,
                'name_bn'  => 'ডেমো নাম',
                'slug'  => Str::slug($faker->name),
                'sku'  => $faker->randomDigit(),
                'cat_id'  => 1,
                'brand_id'  => 1,
                'price_en'  => 300,
                'price_bn'  => '৩০০',
                'qty_en'  => 10,
                'qty_bn'  => '১০',
                'short_description_en'  => $faker->paragraph,
                'short_description_bn'  => 'ডেমো প্রোডাক্ট শর্ট ডেসক্রিপশন',
                'long_description_en'  => $faker->paragraph,
                'long_description_bn'  => 'ডেমো প্রোডাক্ট লং ডেসক্রিপশন',
                'image'  => $faker->imageUrl,
                'gallery_image'  => '["165000021, 168574120, 1853664712"]',
            ]);
        }
    }
}
