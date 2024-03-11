<?php

namespace Database\Seeders;

use App\Enum\Chat\ChatTypeEnum;
use App\Models\Setting;
use App\Helpers\Setting as SettingHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        # for frontend to display enum keys translated
        $setting = Setting::query()
            ->updateOrCreate(
                [
                    'key' => 'enum_map',
                ],
                [
                    'name' => 'enum_map',
                    'key' => 'enum_map',
                    'value' => [
                        'map' => [
                            "chat-type" => [
                                'class_name' => ChatTypeEnum::class,
                                'prefix' => null,
                            ],
                        ],
                    ],
                ]
            );
        $setting = Setting::query()
            ->updateOrCreate(
                [
                    'key' => 'static_pages',
                ],
                [
                    'name' => 'static_pages',
                    'key' => 'static_pages',
                    'value' => [
                        "about_us" => [
                            'content' => [
                                'ar' => fake()->paragraph(1),
                                'en' => fake()->paragraph(1),
                            ]
                        ],
                        'privacy_policy' => [
                            'content' => [
                                'ar' => fake()->paragraph(1),
                                'en' => fake()->paragraph(1),
                            ]
                        ],
                        'terms_and_conditions' => [
                            'content' => [
                                'ar' => fake()->paragraph(1),
                                'en' => fake()->paragraph(1),
                            ]
                        ],
                    ],
                ]
            );
        $setting = Setting::query()
            ->updateOrCreate(
                [
                    'key' => 'setting',
                ],
                [
                    'name' => 'setting',
                    'key' => 'setting',
                    'value' => [
                        'tax' => 15,
                        'commission' => 20,
                        'minimum_price_per_hour' => 15,
                        'declien_order_fees' => 15,
                        'notify_before_job_in_hours' => 2,
                        'notify_idel_requested_in_days' => 2,
                        'competions_prize_allocations' => [
                            Str::slug('Single Winner') => [
                                'title' => ['en' => __('Single Winner', [], 'en'), 'ar' => __('Single Winner', [], 'ar')],
                                'precentage' => [
                                    100
                                ],
                            ],
                            Str::slug('Two Winner') => [
                                'title' => ['en' => __('Two Winners', [], 'en'), 'ar' => __('Two Winners', [], 'ar')],
                                'precentage' => [
                                    70,
                                    30,
                                ],
                            ],
                            Str::slug('Triple Winner') => [
                                'title' => ['en' => __('Triple Winners', [], 'en'), 'ar' => __('Triple Winners', [], 'ar')],
                                'precentage' => [
                                    50,
                                    30,
                                    20,
                                ],
                            ],
                        ],
                    ],
                ]
            );
        $setting = Setting::query()
            ->updateOrCreate(
                [
                    'key' => 'main_page',
                ],
                [
                    'name' => 'main_page',
                    'key' => 'main_page',
                    'value' => [
                        'main_section' => [
                            'title' => [
                                'ar' => fake()->paragraph(1),
                                'en' => fake()->paragraph(1),
                            ],
                            'description' => [
                                'ar' => fake()->paragraph(1),
                                'en' => fake()->paragraph(1),
                            ],
                        ],
                        'about_section' => [
                            'title' => [
                                'ar' => fake()->paragraph(1),
                                'en' => fake()->paragraph(1),
                            ],
                            'description' => [
                                'ar' => fake()->paragraph(1),
                                'en' => fake()->paragraph(1),
                            ],
                        ],
                        'count_section' => [
                            'designers_title' => [
                                'ar' => __('designers_title', [], 'ar'),
                                'en' => __('designers_title', [], 'en'),
                            ],
                            'clients_title' => [
                                'ar' => __('clients_title', [], 'ar'),
                                'en' => __('clients_title', [], 'en'),
                            ],
                            'projects_title' => [
                                'ar' => __('projects_title', [], 'ar'),
                                'en' => __('projects_title', [], 'en'),
                            ],
                            'jobs_title' => [
                                'ar' => __('jobs_title', [], 'ar'),
                                'en' => __('jobs_title', [], 'en'),
                            ],
                        ],
                    ],
                ]
            );
        if (!$setting->wasRecentlyCreated) {
            $setting->clearMediaCollection('mainSection');
            $setting->clearMediaCollection('aboutSection');
            $setting->clearMediaCollection('contactSection');
        }

        $setting->addMediaFromUrl(\Illuminate\Support\Facades\URL::asset('assets/landing/mainSection.png'))->toMediaCollection('mainSection');
        $setting->addMediaFromUrl(\Illuminate\Support\Facades\URL::asset('assets/landing/aboutSection.png'))->toMediaCollection('aboutSection');
        $setting->addMediaFromUrl(\Illuminate\Support\Facades\URL::asset('assets/landing/contactSection.png'))->toMediaCollection('contactSection');


        Setting::query()
            ->updateOrCreate(
                [
                    'key' => 'contact',
                ],
                [
                    'name' => 'contact',
                    'key' => 'contact',
                    'value' => [
                        'mobile' => [
                            '0564555666',
                            '0564333444'
                        ],
                        'whatsapp' => [
                            '+966564454545'
                        ],
                        'email' => 'support@samem.co',
                    ],
                ]
            );
        Setting::query()
            ->updateOrCreate(
                [
                    'key' => 'social',
                ],
                [
                    'name' => 'social',
                    'key' => 'social',
                    'value' => [
                        'facebook' => 'https://www.google.com',
                        'x' => 'https://www.google.com',
                        'snapchat' => 'https://www.google.com',
                        'instagram' => 'https://www.google.com',
                    ],
                ]
            );
        $setting = Setting::query()
            ->updateOrCreate([
                'key' => 'header_logo',
            ], [
                'name' => 'header_logo',
                'key' => 'header_logo',
                'value' => [],
            ]);
        if (!$setting->wasRecentlyCreated)
            $setting->clearMediaCollection('settingHeaderLogo');
        $setting->addMediaFromUrl(\Illuminate\Support\Facades\URL::asset('assets/logo.png'))->toMediaCollection('settingHeaderLogo');
        $setting = Setting::query()
            ->updateOrCreate([
                'key' => 'footer_logo',
            ], [
                'name' => 'footer_logo',
                'key' => 'footer_logo',
                'value' => [],
            ]);
        if (!$setting->wasRecentlyCreated)
            $setting->clearMediaCollection('settingFooterLogo');
        $setting->addMediaFromUrl(\Illuminate\Support\Facades\URL::asset('assets/footerLogo.png'))->toMediaCollection('settingFooterLogo');
        # rebind the singleton instance
        app()->singleton('setting', function ($app) {
            cache()->forget('settings');
            return new SettingHelper();
        });
    }
}
