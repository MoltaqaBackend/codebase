<?php

namespace App\Enum;

enum UserTypeEnum:string
{

    const ADMIN = 'admin';
    const CLIENT = 'client';
    const PROVIDER = 'provider';
}