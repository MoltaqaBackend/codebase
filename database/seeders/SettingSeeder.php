<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Helpers\Setting as SettingHelper;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('settings')->truncate();

        $values = [
            [
                'app-contacts' => [
                    'phones' => ['0521215212', '05212012012', '0524512623'],
                    'watsApp' => '0512325626',
                    'facebook' => 'https://www.facebook.com/',
                    'instagram' => 'https://www.instagram.com/',
                    'snapchat' => 'https://www.snapchat.com/',
                    'twitter' => 'https://www.twitter.com/',
                    'tiktok' => 'https://www.tiktok.com/',
                ],
                'about-app' => [
                    'ar' => 'عن التطبيق',
                    'en' => 'about application',
                ],
                'privacy-policy' => [
                    'ar' => 'سياسة الخصوصية',
                    'en' => 'privacy policy',
                ],
                'terms-and-conditions' => [
                    'ar' => 'الشروط والأحكام',
                    'en' => 'terms and conditions',
                ],
                'app-privacy' => [
                    'ar' => 'سياسة الخصوصية',
                    'en' => 'application privacy',
                ],
                'general' => [
                    'tax' => 10,
                    'subscription_renewal_reminder_period' => 2,
                ],
                'first-section' => [
                    'title' => 'about',
                    'description' => 'about description',
                ],
                'second-section' => [
                    'first_title' => 'first title',
                    'first_description' => 'first description',
                    'second_title' => 'second title',
                    'second_description' => 'second description',
                ],
                'how-works' => [
                    'first_description' => 'first description',
                    'second_description' => 'second description',
                    'third_description' => 'third description',
                ],
                'vision' => [
                    'vision_description' => 'vision description',
                    'message_description' => 'message description',
                    'goal_description' => 'goal description',
                ]
            ],
        ];

        foreach ($values as $item) {
            foreach ($item as $key => $value) {
                Setting::create([
                    'key' => $key,
                    'name' => $key,
                    'value' => $value
                ]);
            }
        }
        # rebind the singleton instance
        app()->singleton('setting', function ($app) {
            cache()->forget('settings');
            return new SettingHelper();
        });
    }
}
