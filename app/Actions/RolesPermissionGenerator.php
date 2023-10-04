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
                    'guard_name' => $guard_name
                ],
                [
                    'name' => $model,
                    'guard_name' => $guard_name,
                    'model' => $model,
                    'parent_id' => null,
                ]);

            foreach ($methods as $method) {
                $permissions[] = Permission::firstOrCreate([
                    'name' => "$model $method",
                    'guard_name' => $guard_name,
                    'parent_id' => $permission->id,
                ], [
                    'name' => "$model $method",
                    'guard_name' => $guard_name,
                    'model' => $model,
                    'parent_id' => $permission->id,
                ]);
            }
        }

        if ($additionalAdminPermissions) {
            $parent = null;
            foreach ($additionalAdminPermissions as $additionalAdminPermission) {
                $permissionMore = Permission::firstOrCreate([
                    'name' => $additionalAdminPermission,
                    'guard_name' => $guard_name,
                ], [
                    'name' => $additionalAdminPermission,
                    'guard_name' => $guard_name,
                    'parent_id' => $parent,
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
