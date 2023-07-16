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
            'whatsapp' => '1XXXXXXXXX',
            'wechat' => '01XXXXXXXXX',
            'address_en' => 'Dhaka, Uttara',
            'address_bn' => 'ঢাকা, উত্তরা',
            'footer_description_en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'footer_description_bn' => 'ব্যথা নিজেই যত্ন নেওয়া গুরুত্বপূর্ণ, এবং এটি রোগীর বৃদ্ধি দ্বারা অনুসরণ করা হবে, কিন্তু একই সময়ে এটি ঘটবে যে অনেক কাজ এবং ব্যথা আছে। ন্যূনতম বিষের জন্য ব্যবহার করা যেতে পারে, নস্ট্রুড ব্যায়াম ন্যূনতমভাবে উলামকো শ্রমের জন্য কাজ করতে পারে। দুজনকে দোষারোপ করে সুখী হতে চায় সে।',
            'logo' => 'test.png',
        ]);
    }
}
