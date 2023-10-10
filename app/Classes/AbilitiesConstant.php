<?php

namespace App\Classes;

use ReflectionClass;

class AbilitiesConstant
{
    // Roles
    public const SUPERADMIN = "as-super-admin";
    public const ADMIN = "as-admin";
    public const PROVIDER = "as-provider";
    public const CLIENT = "as-client";

    public static function getAbilities()
    {
        $reflectionClass = new ReflectionClass(static::class);
        return $reflectionClass->getConstants();
    }
}
