<?php

namespace App\Helpers;

use App\Models\Setting as SettingModel;

class Setting
{
    public const CACHE_KEY = 'settings';
    protected $settings;

    public function __construct()
    {
        if (!cache()->has(self::CACHE_KEY)) {
            $this->settings = cache()->rememberForever(self::CACHE_KEY, function(){
                return SettingModel::all();
            });
        }
        $this->settings = cache()->get(self::CACHE_KEY);
    }

    public function __get($key)
    {
        $setting = $this->settings->filter(function ($setting) use ($key) {
            return $setting->key === $key;
        })->first()->value ?? null;

        return (object) $setting;
    }
}
