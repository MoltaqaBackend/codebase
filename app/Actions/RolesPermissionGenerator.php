<?php

namespace App\Actions;

use Spatie\Permission\Models\Permission;

class RolesPermissionGenerator
{
    public function handle(array $models, array $methods, string $guard_name, $additionalAdminPermissions = []): array
    {
        $permissions = [];
        foreach ($models as $model) {
            $permission = Permission::firstOrCreate(
                [
                    'name' => $model,
                ],
                [
                    'name' => $model,
                    'model' => $model,
                    'parent_id' => null,
                    'for_users' => $guard_name != 'admin' ? 1 : 0
                ]
            );

            foreach ($methods as $method) {
                $permissions[] = Permission::firstOrCreate([
                    'name' => "$model $method",
                    'parent_id' => $permission->id,
                ], [
                    'name' => "$model $method",
                    'model' => $model,
                    'parent_id' => $permission->id,
                    'for_users' => $guard_name != 'admin' ? 1 : 0
                ]);
            }
        }

        if ($additionalAdminPermissions) {
            $parent = null;
            foreach ($additionalAdminPermissions as $additionalAdminPermission) {
                $permissionMore = Permission::firstOrCreate([
                    'name' => $additionalAdminPermission,
                ], [
                    'name' => $additionalAdminPermission,
                    'parent_id' => $parent,
                    'for_users' => $guard_name != 'admin' ? 1 : 0
                ]);

                if ($parent == null) {
                    $parent = $permissionMore->id;
                }
                $permissions[] = $permissionMore;
            }
        }

        return $permissions;
    }
}
