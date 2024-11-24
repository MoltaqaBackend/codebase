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
        parent::__construct($repository, PermissionResource::class, 'permission');
    }

    public function __invoke()
    {
        $excludedPermissions = [];
        # Example
        //        $excludedPermissions = [
        //            'products' => [
        //                'products create',
        //            ]
        //        ];

        $originalResponse = Permission::get()->groupBy('model')->map(function ($controls, $modelName) use (&$excludedPermissions) {
            if (in_array($modelName, array_keys($excludedPermissions))) {
                $controls = $controls->whereNotIn('slug', $excludedPermissions[$modelName]);
            }
            return [
                'name' => __('permissions.responses.' . $modelName),
                'controls' => $controls->map(function ($control) {
                    return [
                        "name" => $control->name,
                        "key" => explode(" ", $control->name)[0],
                        "id" => $control->id,

                    ];
                })->all(),
            ];

        })->values();
        return $this->respondWithArray(["permissions" => $originalResponse]);
    }
}
