<?php

namespace Database\Seeders;

use App\Models\PrivacyPolicy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivacyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $privacy_policy = [
            ['title_en' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 'title_bn' => 'গ্রাহক নিজেই, গ্রাহক কোম্পানির এডিপিসিং অনুসরণ করতে সক্ষম হবেন।',
             'description_en' => 'M/S. MEGHLA ENTERPRISEs a proprietor company established as a registered Clearing and Forwarding Agent under the government of Bangladesh. My previous company sky Enterprise as a partnership since 2004 registered clearing and forwarding Agent under the government of Bangladesh.

             After more than two decades of hard work and success have bore the company fruits of labor by enriching the client portfolio and helped establish branch offices all over Bangladesh. Branced with the support of loyal workforce the proprietor has leaded the company to build long trust and maintained Goodwill all over the clearing forwarding industry and have set the company as a benchmark among the competitors. The company hopes to deliver prospective clients and existing clients with safe and reliable service at competitive price M/S. MEGHLA ENTERPRISE has a wide and rich client base and is highly specialized in the Mobile phone, puter, electronics, consumer products, medicine, chemicals, energy sector etc.',
            'description_bn' => 'মাইক্রোসফট. মেঘলা এন্টারপ্রাইজ বাংলাদেশ সরকারের অধীনে একটি নিবন্ধিত ক্লিয়ারিং এবং ফরওয়ার্ডিং এজেন্ট হিসাবে প্রতিষ্ঠিত একটি স্বত্বাধিকারী কোম্পানি। আমার আগের কোম্পানি স্কাই এন্টারপ্রাইজ একটি অংশীদারিত্ব হিসাবে 2004 সাল থেকে বাংলাদেশ সরকারের অধীনে নিবন্ধিত ক্লিয়ারিং এবং ফরওয়ার্ডিং এজেন্ট।

            দুই দশকেরও বেশি পরিশ্রম এবং সাফল্যের পর ক্লায়েন্ট পোর্টফোলিওকে সমৃদ্ধ করার মাধ্যমে কোম্পানির শ্রমের ফল এসেছে এবং সারা বাংলাদেশে শাখা অফিস স্থাপনে সহায়তা করেছে। অনুগত কর্মীবাহিনীর সমর্থনে স্বত্বাধিকারী কোম্পানিকে দীর্ঘ আস্থা গড়ে তুলতে নেতৃত্ব দিয়েছেন এবং ক্লিয়ারিং ফরওয়ার্ডিং শিল্পের সর্বত্র গুডউইল বজায় রেখেছেন এবং কোম্পানিটিকে প্রতিযোগীদের মধ্যে একটি মানদণ্ড হিসেবে সেট করেছেন। কোম্পানি আশা করে যে সম্ভাব্য ক্লায়েন্ট এবং বিদ্যমান ক্লায়েন্টদের প্রতিযোগীতামূলক মূল্য M/S এ নিরাপদ ও নির্ভরযোগ্য সেবা প্রদান করবে। মেঘলা এন্টারপ্রাইজের একটি বিস্তৃত এবং সমৃদ্ধ ক্লায়েন্ট বেস রয়েছে এবং এটি মোবাইল ফোন, পিউটার, ইলেকট্রনিক্স, ভোক্তা পণ্য, ওষুধ, রাসায়নিক, শক্তি সেক্টর ইত্যাদিতে অত্যন্ত বিশেষায়িত।'],
        ];

        PrivacyPolicy::insert($privacy_policy);
    }
}
