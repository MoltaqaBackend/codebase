<?php

namespace App\Classes;

use ReflectionClass;

class DashboardModulesConstant
{
    // Dashboard Modules
    public const SLIDE = "slide";
    public const ADMIN = "admin";
    public const PROVIDER = "provider";
    public const CLIENT = "client";
    public const SETTING = "setting";

    public static function getDashboardModules()
    {
        $reflectionClass = new ReflectionClass(static::class);
        return $reflectionClass->getConstants();
    }

    public static function getModulesForMainActions()
    {
        return [self::SLIDE, self::ADMIN, self::PROVIDER, self::CLIENT];
    }
}
