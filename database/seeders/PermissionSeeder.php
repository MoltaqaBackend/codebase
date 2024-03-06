<?php

namespace Database\Seeders;

use App\Actions\RolesPermissionGenerator;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    protected static mixed $abilities;
    protected static mixed $models;
    protected static mixed $permissions;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->truncate();
        DB::table('permissions')->truncate();
        DB::table('role_has_permissions')->truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('model_has_permissions')->truncate();

        $this->defaultPermissions();
        $this->syncAdminRole();
        $this->syncClientRole();
        $this->syncProviderRole();
    }

    public function defaultPermissions(): void
    {
        $this->adminRole(new RolesPermissionGenerator());
        $this->clientRole(new RolesPermissionGenerator());
        $this->providerRole(new RolesPermissionGenerator());
    }

    private function adminRole($rolesPermissionGenerator): void
    {
        # Models
        $adminModels = [
            'User', 'Role', 'Setting', 'Permission', 'NotificationContent', 'Chat'
        ];
        # Default Methods
        $methods = ['index', 'create', 'edit', 'delete', 'show', 'activate'];
        # Additional Permissions
        $additionalAdminPermissions = [];
        # Generate
        $adminRole = Role::firstOrCreate([
            'name' => [
                'ar' => __('permissions.responses.roles-models.admin', [], 'ar'),
                'en' => __('permissions.responses.roles-models.admin', [], 'en')
            ],
            'guard_name' => 'api',
            'slug' => 'admin'
        ]);
        $adminRole->syncPermissions(
            $rolesPermissionGenerator->handle(
                $adminModels,
                $methods,
                'admin',
                additionalAdminPermissions: $additionalAdminPermissions
            )
        );
    }

    private function clientRole($rolesPermissionGenerator): void
    {
        # Models
        $clientModels = [];
        # Default Methods
        $methods = ['index', 'create', 'edit', 'delete', 'show', 'activate'];
        # Additional Permissions
        $additionalClientPermissions = [];
        # Generate
        $clientRole = Role::firstOrCreate([
            'name' => [
                'ar' => __('permissions.responses.roles-models.client', [], 'ar'),
                'en' => __('permissions.responses.roles-models.client', [], 'en')
            ],
            'guard_name' => 'api',
            'slug' => 'client'
        ]);
        $clientRole->syncPermissions(
            $rolesPermissionGenerator->handle(
                $clientModels,
                $methods,
                'client',
                additionalAdminPermissions: $additionalClientPermissions
            )
        );
    }

    private function providerRole($rolesPermissionGenerator): void
    {
        # Models
        $providerModels = [];
        # Default Methods
        $methods = ['index', 'create', 'edit', 'delete', 'show', 'activate'];
        # Additional Permissions
        $additionalProviderPermissions = [];
        # Generate
        $providerRole = Role::firstOrCreate([
            'name' => [
                'ar' => __('permissions.responses.roles-models.provider', [], 'ar'),
                'en' => __('permissions.responses.roles-models.provider', [], 'en')
            ],
            'guard_name' => 'api',
            'slug' => 'provider'
        ]);
        $providerRole->syncPermissions(
            $rolesPermissionGenerator->handle(
                $providerModels,
                $methods,
                'provider',
                additionalAdminPermissions: $additionalProviderPermissions
            )
        );
    }

    private function syncAdminRole(): void
    {
        User::whereRelation('roles', 'slug', 'LIKE', 'admin')
            ->get()
            ->each(function ($user) {
                $user->syncRoles([1]);
            });
    }

    private function syncClientRole(): void
    {
        User::whereRelation('roles', 'slug', 'LIKE', 'client')
            ->get()
            ->each(function ($user) {
                $user->syncRoles([2]);
            });;
    }

    private function syncProviderRole(): void
    {
        User::whereRelation('roles', 'slug', 'LIKE', 'provider')
            ->get()
            ->each(function ($user) {
                $user->syncRoles([3]);
            });
    }
}
