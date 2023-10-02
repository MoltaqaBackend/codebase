<?php

namespace App\Classes;

use ReflectionClass;

class DashboardModulesActionsConstant
{
    // Dashboard Modules Actions
    const INDEX = "index";
    const CREATE = "create";
    const EDIT = "edit";
    const SHOW = "show";
    const DELETE = "delete";
    const ACTIVATE = "activiate";

    const TERMS_AND_CONDITIONS = "terms_and_conditions";

    public static function getDashboardModulesActions()
    {
        $reflectionClass = new ReflectionClass(static::class);
        return $reflectionClass->getConstants();
    }

    public static function getMainActions() {
        return [self::INDEX, self::CREATE , self::EDIT , self::SHOW,self::DELETE , self::ACTIVATE];
    }

    public static function getSettingActions() {
        return [self::TERMS_AND_CONDITIONS];
    }
}
