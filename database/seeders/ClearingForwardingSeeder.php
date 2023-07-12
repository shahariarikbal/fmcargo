<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClearingForwarding;

class ClearingForwardingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clearing_forwarding = [
            ['header_title_en' => 'C&F Service', 'header_title_bn' => 'ক্লিয়ারিং এবং ফরওয়ার্ডিং পরিষেবা',
             'header_desc_en' => 'FM Cargo provides a reliable and hassle-free door to door shipping service from China, Dubai, Malaysia, USA, UK, EU, France, Hong Kong, Singapore, Australia, Thailand, Pakistan, and India. We have strategically located warehouses in these countries to ensure a seamless and efficient shipping process for our clients. Our experienced team takes care of everything from packing, custom clearance, and transportation to ensure that your shipment arrives at your doorstep on time and in perfect condition. Trust FM Cargo to handle all your door to door shipping needs. Let’s see what our Door to Door service includes.',
            'header_desc_bn' => 'এফএম কার্গো চীন, দুবাই, মালয়েশিয়া, মার্কিন যুক্তরাষ্ট্র, যুক্তরাজ্য, ইইউ, ফ্রান্স, হংকং, সিঙ্গাপুর, অস্ট্রেলিয়া, থাইল্যান্ড, পাকিস্তান এবং ভারত থেকে একটি নির্ভরযোগ্য এবং ঝামেলামুক্ত ডোর টু ডোর শিপিং পরিষেবা প্রদান করে। আমাদের ক্লায়েন্টদের জন্য একটি নির্বিঘ্ন এবং দক্ষ শিপিং প্রক্রিয়া নিশ্চিত করার জন্য আমাদের এই দেশগুলিতে কৌশলগতভাবে গুদামগুলি রয়েছে। আপনার চালান সময়মতো এবং নিখুঁত অবস্থায় আপনার দোরগোড়ায় পৌঁছেছে তা নিশ্চিত করতে আমাদের অভিজ্ঞ দল প্যাকিং, কাস্টম ক্লিয়ারেন্স এবং পরিবহন থেকে সবকিছুর যত্ন নেয়। আপনার ডোর টু ডোর শিপিং প্রয়োজনীয়তাগুলি পরিচালনা করার জন্য FM কার্গোকে বিশ্বাস করুন। আসুন দেখি আমাদের ডোর টু ডোর পরিষেবাতে কী অন্তর্ভুক্ত রয়েছে।',
            'pro_sourcing_title_en' => 'PRODUCT SOURCING', 'pro_sourcing_title_bn' => 'পণ্য সোর্সিং',
            'pro_sourcing_desc_en' => 'If you need to import goods from overseas but need the necessary licenses or contacts, FM Cargo can help. We offer Product Sourcing services that enable you to find and purchase products from reliable suppliers worldwide. Our sourcing services can help businesses reduce costs, improve quality, and increase efficiency in their supply chain management.

            At FM Cargo, we understand the importance of effective sourcing and have a vast network of suppliers and manufacturers in several countries. We can assist our clients in finding the products they need, evaluating potential suppliers, and negotiating favorable prices and terms.',
            'pro_sourcing_desc_bn' => 'আপনি যদি বিদেশ থেকে পণ্য আমদানি করতে চান তবে প্রয়োজনীয় লাইসেন্স বা পরিচিতি প্রয়োজন, FM কার্গো সাহায্য করতে পারে। আমরা পণ্য সোর্সিং পরিষেবাগুলি অফার করি যা আপনাকে বিশ্বব্যাপী নির্ভরযোগ্য সরবরাহকারীদের থেকে পণ্যগুলি খুঁজে পেতে এবং কিনতে সক্ষম করে। আমাদের সোর্সিং পরিষেবাগুলি ব্যবসাগুলিকে খরচ কমাতে, গুণমান উন্নত করতে এবং তাদের সাপ্লাই চেইন ব্যবস্থাপনায় দক্ষতা বাড়াতে সাহায্য করতে পারে।

            এফএম কার্গোতে, আমরা কার্যকর সোর্সিংয়ের গুরুত্ব বুঝতে পারি এবং বিভিন্ন দেশে সরবরাহকারী এবং নির্মাতাদের একটি বিশাল নেটওয়ার্ক রয়েছে। আমরা আমাদের ক্লায়েন্টদের তাদের প্রয়োজনীয় পণ্যগুলি খুঁজে বের করতে, সম্ভাব্য সরবরাহকারীদের মূল্যায়ন করতে এবং অনুকূল দাম এবং শর্তাদি নিয়ে আলোচনা করতে সহায়তা করতে পারি।',
            'pro_sourcing_img' => 'service-details1.jpg', 'free_warehousing_title_en' => 'FREE WAREHOUSING', 'free_warehousing_title_bn' => 'বিনামূল্যে গুদামজাতকরণ',
            'free_warehousing_desc_en' => 'Once your products are sourced, FM Cargo provides Free Warehousing services in our state-of-the-art facilities. Our free warehousing services are an excellent solution for businesses that need temporary storage space for their goods.

            Your business can reduce storage costs and improve supply chain management efficiency by choosing FM Cargo’s free warehousing services. We offer flexible storage solutions, allowing our clients to store their products for as long as they need without incurring any costs. Our warehouses have the latest security and monitoring systems, ensuring your products are stored safely and securely.',
            'free_warehousing_desc_bn' => 'আপনার পণ্যগুলি একবার পাওয়া গেলে, FM কার্গো আমাদের অত্যাধুনিক সুবিধাগুলিতে বিনামূল্যে গুদামজাতকরণ পরিষেবা সরবরাহ করে। আমাদের বিনামূল্যে গুদামজাতকরণ পরিষেবাগুলি এমন ব্যবসাগুলির জন্য একটি চমৎকার সমাধান যেগুলির জন্য তাদের পণ্যগুলির জন্য অস্থায়ী স্টোরেজ স্থান প্রয়োজন৷

            FM কার্গো-এর বিনামূল্যে গুদামজাতকরণ পরিষেবাগুলি বেছে নেওয়ার মাধ্যমে আপনার ব্যবসা স্টোরেজ খরচ কমাতে এবং সাপ্লাই চেইন ম্যানেজমেন্টের দক্ষতা উন্নত করতে পারে। আমরা নমনীয় স্টোরেজ সলিউশন অফার করি, আমাদের ক্লায়েন্টদের তাদের পণ্যগুলি যতক্ষণ পর্যন্ত প্রয়োজন ততক্ষণ কোনো খরচ ছাড়াই সংরক্ষণ করতে দেয়। আমাদের গুদামগুলিতে আপনার পণ্যগুলি নিরাপদে এবং নিরাপদে সংরক্ষণ করা হয়েছে তা নিশ্চিত করে সর্বশেষ সুরক্ষা এবং পর্যবেক্ষণ ব্যবস্থা রয়েছে৷',
            'free_warehousing_img' => 'service-details2.png', 'inspection_title_en' => 'INSPECTION', 'inspection_title_bn' => 'পরিদর্শন',
            'inspection_desc_en' => 'At FM Cargo, we offer inspection services to ensure our clients receive high-quality products and materials. We provide pre-shipment inspections, factory audits, and product testing to ensure the products meet the required standards and specifications.

            Our inspection services can help you to identify any issues or defects before the products are shipped, allowing you to make decisions and avoid any potential quality or compliance issues. Our team of experienced and qualified inspectors uses the latest technology and equipment to ensure our client reduces risks, saves time and money, and improves their supply chain management efficiency.',
            'inspection_desc_bn' => 'এফএম কার্গোতে, আমরা আমাদের ক্লায়েন্টদের উচ্চ-মানের পণ্য এবং উপকরণ প্রাপ্তি নিশ্চিত করতে পরিদর্শন পরিষেবা অফার করি। পণ্যগুলি প্রয়োজনীয় মান এবং স্পেসিফিকেশন পূরণ করে তা নিশ্চিত করার জন্য আমরা প্রি-শিপমেন্ট পরিদর্শন, কারখানার অডিট এবং পণ্য পরীক্ষা প্রদান করি।

            আমাদের পরিদর্শন পরিষেবাগুলি আপনাকে পণ্যগুলি পাঠানোর আগে কোনও সমস্যা বা ত্রুটি সনাক্ত করতে সাহায্য করতে পারে, আপনাকে সিদ্ধান্ত নিতে এবং কোনও সম্ভাব্য গুণমান বা সম্মতির সমস্যাগুলি এড়াতে অনুমতি দেয়। আমাদের ক্লায়েন্ট ঝুঁকি কমায়, সময় ও অর্থ সাশ্রয় করে এবং তাদের সাপ্লাই চেইন ম্যানেজমেন্টের দক্ষতা উন্নত করে তা নিশ্চিত করতে আমাদের অভিজ্ঞ এবং যোগ্য পরিদর্শকদের দল সর্বশেষ প্রযুক্তি এবং সরঞ্জাম ব্যবহার করে।',
            'inspection_img' => 'service-details3.png', 'repacking_title_en' => 'RE-PACKAGING', 'repacking_title_bn' => 'পুনরায় প্যাকেজিং',
            'repacking_desc_en' => 'If your products need to be re-packaged for shipping or other purposes, FM Cargo can help. Our team of experts can repack your products into new packaging, which ensures that your products are safe and secure during transportation and delivery.

            Our re-packaging services help businesses to save time and money by reducing the need to handle products multiple times during shipping and delivery. We also ensure that the products meet the required packaging standards. By choosing FM Cargo’s re-packaging services, businesses can improve their supply chain management efficiency and ensure that their products are delivered to customers in the best possible condition.',
            'repacking_desc_bn' => 'যদি আপনার পণ্যগুলি শিপিং বা অন্যান্য উদ্দেশ্যে পুনরায় প্যাকেজ করার প্রয়োজন হয়, FM কার্গো সাহায্য করতে পারে। আমাদের বিশেষজ্ঞদের দল আপনার পণ্যগুলিকে নতুন প্যাকেজিংয়ে পুনরায় প্যাক করতে পারে, যা নিশ্চিত করে যে আপনার পণ্যগুলি পরিবহন এবং ডেলিভারির সময় নিরাপদ এবং সুরক্ষিত।

            আমাদের রি-প্যাকেজিং পরিষেবাগুলি শিপিং এবং ডেলিভারির সময় একাধিকবার পণ্যগুলি পরিচালনা করার প্রয়োজনীয়তা হ্রাস করে সময় এবং অর্থ সাশ্রয় করতে ব্যবসায়কে সহায়তা করে। আমরা নিশ্চিত করি যে পণ্যগুলি প্রয়োজনীয় প্যাকেজিং মান পূরণ করে। FM কার্গোর রি-প্যাকেজিং পরিষেবাগুলি বেছে নেওয়ার মাধ্যমে, ব্যবসাগুলি তাদের সাপ্লাই চেইন ম্যানেজমেন্টের দক্ষতা উন্নত করতে পারে এবং নিশ্চিত করতে পারে যে তাদের পণ্যগুলি সর্বোত্তম অবস্থায় গ্রাহকদের কাছে পৌঁছে দেওয়া হয়েছে।',
            'repacking_img' => 'service-details4.png', 'custom_clr_title_en' => 'CUSTOM CLEARANCE', 'custom_clr_title_bn' => '
            কাস্টম ক্লিয়ারেন্স', 'custom_clr_desc_en' => 'FM Cargo offers hassle-free Custom Clearance that handle all the documentation and procedures to ensure the products are cleared quickly and efficiently through customs. Our team of experts is well-versed in various countries’ customs clearance procedures, which will help you to avoid costly delays and penalties associated with non-compliance with customs regulations.

            By choosing FM Cargo’s custom clearance services, you can ensure that your products comply with all the necessary regulations. This will also save you time and money by streamlining the customs clearance process and ensuring their products are delivered on time.',
            'custom_clr_desc_bn' => 'এফএম কার্গো ঝামেলা-মুক্ত কাস্টম ক্লিয়ারেন্স অফার করে যা কাস্টমসের মাধ্যমে পণ্যগুলি দ্রুত এবং দক্ষতার সাথে পরিষ্কার করা নিশ্চিত করতে সমস্ত ডকুমেন্টেশন এবং পদ্ধতিগুলি পরিচালনা করে। আমাদের বিশেষজ্ঞদের দল বিভিন্ন দেশের কাস্টমস ক্লিয়ারেন্স পদ্ধতিতে পারদর্শী, যা আপনাকে শুল্ক প্রবিধানের সাথে অ-সম্মতি সম্পর্কিত ব্যয়বহুল বিলম্ব এবং জরিমানা এড়াতে সাহায্য করবে।

            FM কার্গোর কাস্টম ক্লিয়ারেন্স পরিষেবাগুলি বেছে নেওয়ার মাধ্যমে, আপনি নিশ্চিত করতে পারেন যে আপনার পণ্যগুলি সমস্ত প্রয়োজনীয় প্রবিধান মেনে চলছে৷ এটি কাস্টমস ক্লিয়ারেন্স প্রক্রিয়াকে সহজতর করে এবং তাদের পণ্যগুলি সময়মতো সরবরাহ করা নিশ্চিত করে আপনার সময় এবং অর্থ সাশ্রয় করবে।',
            'custom_clr_img' => 'service-details5.png', 'd_step_delivery_title_en' => 'DOOR STEP DELIVERY', 'd_step_delivery_title_bn' => 'ডোর স্টেপ ডেলিভারি',
            'd_step_delivery_desc_en' => 'Finally, FM Cargo provides convenient and hassle-free Door Step Delivery services to deliver your products directly to your doorstep. We work with reputable shipping companies and logistics providers to ensure your products are delivered safely and in the best possible condition. It will help you to save time and money by outsourcing your logistics and delivery needs to a trusted logistics provider.

            Our team of experts can manage the entire delivery process, from packing and labeling to transportation and final delivery, ensuring that the products are delivered safely to your doorsteps and improving customer satisfaction and loyalty.',
            'd_step_delivery_desc_bn' => 'অবশেষে, FM কার্গো আপনার পণ্য সরাসরি আপনার দোরগোড়ায় পৌঁছে দেওয়ার জন্য সুবিধাজনক এবং ঝামেলা-মুক্ত ডোর স্টেপ ডেলিভারি পরিষেবা প্রদান করে। আপনার পণ্য নিরাপদে এবং সম্ভাব্য সর্বোত্তম অবস্থায় সরবরাহ করা হয় তা নিশ্চিত করতে আমরা নামী শিপিং কোম্পানি এবং লজিস্টিক প্রদানকারীদের সাথে কাজ করি। এটি আপনাকে একটি বিশ্বস্ত লজিস্টিক সরবরাহকারীর কাছে আপনার সরবরাহ এবং সরবরাহের প্রয়োজন আউটসোর্স করে সময় এবং অর্থ বাঁচাতে সহায়তা করবে।

            আমাদের বিশেষজ্ঞদের দল পুরো ডেলিভারি প্রক্রিয়া পরিচালনা করতে পারে, প্যাকিং এবং লেবেল থেকে পরিবহণ এবং চূড়ান্ত ডেলিভারি পর্যন্ত, পণ্যগুলি আপনার দোরগোড়ায় নিরাপদে পৌঁছে দেওয়া এবং গ্রাহকের সন্তুষ্টি এবং আনুগত্যের উন্নতি নিশ্চিত করে৷',
            'd_step_delivery_img' => 'service-details6.png', 'footer_desc_en' => 'At FM Cargo, we are committed to providing our clients with reliable and efficient door to door services. We offer personalized solutions that meet your specific requirements and ensure that your goods are delivered on time and in perfect condition. Contact us today to learn more about our door to door services and how we can assist you with your shipping and logistics needs.',
            'footer_desc_bn' => 'এফএম কার্গোতে, আমরা আমাদের ক্লায়েন্টদের নির্ভরযোগ্য এবং দক্ষ দ্বারে দ্বারে সেবা প্রদান করতে প্রতিশ্রুতিবদ্ধ। আমরা ব্যক্তিগতকৃত সমাধান অফার করি যা আপনার নির্দিষ্ট প্রয়োজনীয়তা পূরণ করে এবং নিশ্চিত করে যে আপনার পণ্যগুলি সময়মতো এবং নিখুঁত অবস্থায় বিতরণ করা হয়। আমাদের ডোর টু ডোর পরিষেবা সম্পর্কে আরও জানতে এবং কীভাবে আমরা আপনার শিপিং এবং লজিস্টিক চাহিদাগুলির সাথে আপনাকে সহায়তা করতে পারি তা জানতে আজই আমাদের সাথে যোগাযোগ করুন৷'],
        ];

        ClearingForwarding::insert($clearing_forwarding);
    }
}
