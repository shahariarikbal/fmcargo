<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'email'  => 'test@gmail.com',
            'phone'  => '01XXXXXXXXX',
            'facebook' => 'https://www.facebook.com/',
            'whatsapp' => '01XXXXXXXXX',
            'wechat' => '01XXXXXXXXX',
            'address' => 'Dhaka, Uttara',
            'footer_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'logo' => 'test.png',
        ]);
    }
}
