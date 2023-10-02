<?php

namespace App\Classes;

use ReflectionClass;

class AbilitiesConstant
{
    // Roles
    const SUPERADMIN = "as-super-admin";
    const ADMIN = "as-admin";
    const PROVIDER = "as-provider";
    const CLIENT = "as-client";

    public static function getAbilities()
    {
        $reflectionClass = new ReflectionClass(static::class);
        return $reflectionClass->getConstants();
    }
}
