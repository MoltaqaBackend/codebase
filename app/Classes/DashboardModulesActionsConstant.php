<?php

namespace App\Classes;

use ReflectionClass;

class DashboardModulesActionsConstant
{
    // Dashboard Modules Actions
    public const INDEX = "index";
    public const CREATE = "create";
    public const EDIT = "edit";
    public const SHOW = "show";
    public const DELETE = "delete";
    public const ACTIVATE = "activiate";

    public const TERMS_AND_CONDITIONS = "terms_and_conditions";

    public static function getDashboardModulesActions()
    {
        $reflectionClass = new ReflectionClass(static::class);
        return $reflectionClass->getConstants();
    }

    public static function getMainActions()
    {
        return [self::INDEX, self::CREATE , self::EDIT , self::SHOW,self::DELETE , self::ACTIVATE];
    }

    public static function getSettingActions()
    {
        return [self::TERMS_AND_CONDITIONS];
    }
}
