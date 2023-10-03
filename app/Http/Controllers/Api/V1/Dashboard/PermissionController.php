<?php

namespace App\Http\Controllers\Api\V1\Dashboard;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Resources\Api\PermissionResource;
use App\Models\Permission;
use App\Repositories\Contracts\PermissionContract;

class PermissionController extends BaseApiController
{
    /**
     * PermissionController constructor.
     * @param PermissionContract $repository
     */
    public function __construct(PermissionContract $repository)
    {
        parent::__construct($repository, PermissionResource::class,'permission');
    }

    public function __invoke()
    {
        return PermissionResource::collection(Permission::get());
    }
}
