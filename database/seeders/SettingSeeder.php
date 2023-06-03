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
            'logo' => 'test.png',
        ]);
    }
}
