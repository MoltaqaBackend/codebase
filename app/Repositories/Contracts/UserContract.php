<?php

namespace App\Repositories\Contracts;

use App\Enum\UserTypeEnum;

interface UserContract extends BaseContract
{

    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function create(array $attributes = [], string $type = UserTypeEnum::ADMIN): mixed;

}

