<?php

namespace Database\Seeders;

use App\Models\Booking;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1,30) as $index){
            $faker = Faker::create();
            Booking::create([
                'name'  => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'pick_up_address' => $faker->address,
                'drop_of_address' => $faker->address,
                'weight_pcs' => $faker->randomDigitNotZero(),
                'unit'       => 'kg',
                'bookingId'  => 'FM'. rand(1000, 9999),
                'product_description' => $faker->sentence,
            ]);
        }
    }
}
