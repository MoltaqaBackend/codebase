<?php

namespace App\Classes;

use ReflectionClass;

class DashboardModulesConstant
{
    // Dashboard Modules
    const SLIDE = "slide";
    const ADMIN = "admin";
    const PROVIDER = "provider";
    const CLIENT = "client";
    const SETTING = "setting";

    public static function getDashboardModules()
    {
        $reflectionClass = new ReflectionClass(static::class);
        return $reflectionClass->getConstants();
    }

    public static function getModulesForMainActions(){
        return [self::SLIDE, self::ADMIN, self::PROVIDER, self::CLIENT];
    }
}
