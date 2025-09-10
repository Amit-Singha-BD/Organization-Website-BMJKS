<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder {

    public function run(): void {
        Setting::insert([
            "site_title"            => "বাংলাদেশ মণিপুরী যুব কল্যাণ সমিতি",
            "tagline"               => "যুব সমাজের শক্তি জাতির অগ্রযাত্রা",
            "logo_path"             => "logo.png",
            "favicon_path"          => "favicon.png",

            "meta_title"            => "আমার দারুণ ওয়েবসাইট - সেরা শেখার প্ল্যাটফর্ম",
            "meta_description"      => "আমার দারুণ ওয়েবসাইট হলো একটি আধুনিক প্ল্যাটফর্ম যেখানে ওয়েব ডেভেলপমেন্ট প্রোগ্রামিং এবং প্রযুক্তি বিষয়ক আপডেট শিখতে পারবেন। যোগ দিন এবং আপনার দক্ষতা বাড়ান।",
            "meta_keywords"         => "ওয়েব ডেভেলপমেন্ট প্রোগ্রামিং প্রযুক্তি টিউটোরিয়াল শেখা",

            "google_search_console" => "GSC-1234567890",
            "google_analytics"      => "UA-12345678-1",

            "slide_title_1"       => "শিখুন ওয়েব ডেভেলপমেন্ট",
            "slide_description_1" => "HTML, CSS, JavaScript, PHP এবং Laravel আয়ত্ত করুন বাস্তব প্রজেক্টের মাধ্যমে।",
            "slide_image_1_path"  => "demo_slide_1.png",

            "slide_title_2"       => "সর্বশেষ আপডেট পান",
            "slide_description_2" => "নতুন টিউটোরিয়াল, ট্রেন্ডিং টেক নিউজ এবং গাইডলাইনস আপনার হাতের নাগালে।",
            "slide_image_2_path"  => "demo_slide_2.png",

            "slide_title_3"       => "আপনার ক্যারিয়ার গড়ুন",
            "slide_description_3" => "হ্যান্ডস-অন প্র্যাকটিস এবং আধুনিক দক্ষতার মাধ্যমে নিজের ক্যারিয়ারকে এগিয়ে নিন।",
            "slide_image_3_path"  => "demo_slide_3.png",

            "slide_title_4"       => "ফ্রন্টএন্ড ডেভেলপমেন্ট আয়ত্ত করুন",
            "slide_description_4" => "HTML, CSS এবং JavaScript দিয়ে ইন্টারেক্টিভ ওয়েবসাইট তৈরি করতে শিখুন।",
            "slide_image_4_path"  => "demo_slide_4.png",

            "slide_title_5"       => "আপডেট থাকুন প্রযুক্তিতে",
            "slide_description_5" => "নতুন ফ্রেমওয়ার্ক, লাইব্রেরি এবং টেক ট্রেন্ড সম্পর্কে সর্বশেষ তথ্য পান।",
            "slide_image_5_path"  => "demo_slide_5.png",

            "slide_title_6"       => "ডেভেলপার হিসেবে এগিয়ে চলুন",
            "slide_description_6" => "প্রজেক্ট ভিত্তিক শেখার মাধ্যমে আপনার স্কিল সেটকে আরও শক্তিশালী করুন।",
            "slide_image_6_path"  => "demo_slide_6.png",

            "link_name_1"           => "সার্ভিসসমূহ",
            "link_name_2"           => "ব্লগ সাইট",
            "link_name_3"           => "যোগাযোগ",

            "link_1"                => "https://example.com/services",
            "link_2"                => "https://example.com/blog",
            "link_3"                => "https://example.com/contact",

            "facebook_url"          => "https://facebook.com/myawesomewebsite",
            "youtube_url"           => "https://youtube.com/@myawesomewebsite",
            "twitter_url"           => "https://twitter.com/myawesomewebsite",
            "instagram_url"         => "https://instagram.com/@myawesomewebsite",

            "email"                 => "support@example.com",
            "phone_no"              => "01710000000",
            "address"               => "১২৩, ধানমন্ডি, ঢাকা, বাংলাদেশ",
        ]);
    }
}
